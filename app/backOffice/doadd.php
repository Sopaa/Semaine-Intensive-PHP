<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 12/02/2018
 * Time: 11:45
 */

require_once "connexion.php";

/* On vérifie que tous les champs sont bien remplis*/
if (empty($_POST['id']) || empty($_POST['nom']) || empty($_POST['categorie']) || empty($_FILES['image']['name'])||
    empty($_POST['elevage']) || empty($_POST['morphologie']) || empty($_POST['plaisirDesYeux']) ||
    empty($_POST['degustation']) || empty($_POST['origine']) || empty($_POST['note'])|| empty($_POST['stock'])) {
    header('Location: index.php?error');
    exit;
}

/*
foreach($required as $field) {
    if (empty($_POST[$field])) {
        $error = true;
    }
}
*/

/* Requête d'ajout dans la db*/
$request = "INSERT INTO
`meat` 
(`id`, `nom`, `categorie`, `image`, `elevage`, `morphologie`, `plaisirDesYeux`, `degustation`, `origine`,`prix`, `note`, `stock`)
VALUES 
(:id, :nom, :categorie, :image, :elevage, :morphologie, :plaisirDesYeux, :degustation, :origine, :prix, :note , :stock) 

;";

/* Upload de l'image dans le dossier img */
$uploadfile = 'img/'.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

/* On bind chaque valeur pour les insérer dans la requête INSERT INTO */
$stmt = $connection->prepare($request);
$stmt->bindValue(':id', htmlentities($_POST['id']));
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':categorie', htmlentities($_POST['categorie']));
$stmt->bindValue(':image', htmlentities($_FILES['image']['name']));
$stmt->bindValue(':elevage', htmlentities($_POST['elevage']));
$stmt->bindValue(':morphologie', htmlentities($_POST['morphologie']));
$stmt->bindValue(':plaisirDesYeux', htmlentities($_POST['plaisirDesYeux']));
$stmt->bindValue(':degustation', htmlentities($_POST['degustation']));
$stmt->bindValue(':origine', htmlentities($_POST['origine']));
$stmt->bindValue(':prix', htmlentities($_POST['prix']));
$stmt->bindValue(':note', htmlentities($_POST['note']));
$stmt->bindValue(':stock', htmlentities($_POST['stock']));
$stmt->execute();

/* Retour à l'index*/
header('Location: index.php');