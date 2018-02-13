<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 12/02/2018
 * Time: 11:45
 */

require_once "connexion.php";

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


$request = "INSERT INTO
`meat` 
(`id`, `nom`, `categorie`, `image`, `elevage`, `morphologie`, `plaisirDesYeux`, `degustation`, `origine`,`prix`, `note`, `stock`)
VALUES 
(:id, :nom, :categorie, :image, :elevage, :morphologie, :plaisirDesYeux, :degustation, :origine, :prix, :note , :stock) 

;";

$uploadfile = 'img/'.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

$stmt = $connection->prepare($request);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':categorie', $_POST['categorie']);
$stmt->bindValue(':image', $_FILES['image']['name']);
$stmt->bindValue(':elevage', $_POST['elevage']);
$stmt->bindValue(':morphologie', $_POST['morphologie']);
$stmt->bindValue(':plaisirDesYeux', $_POST['plaisirDesYeux']);
$stmt->bindValue(':degustation', $_POST['degustation']);
$stmt->bindValue(':origine', $_POST['origine']);
$stmt->bindValue(':prix', $_POST['prix']);
$stmt->bindValue(':note', $_POST['note']);
$stmt->bindValue(':stock', $_POST['stock']);
$stmt->execute();

header('Location: index.php');