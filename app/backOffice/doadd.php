<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 10:57
 */
session_start();


if(isset($_SESSION['logged'])){
require_once "connexion.php";
/* Verify if all the fields are filled*/
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

/* Add in DataBase request */
$request = "INSERT INTO
`meat` 
(`id`, `nom`, `categorie`, `image`, `elevage`, `morphologie`, `plaisirDesYeux`, `degustation`, `origine`,`prix`, `note`, `stock`)
VALUES 
(:id, :nom, :categorie, :image, :elevage, :morphologie, :plaisirDesYeux, :degustation, :origine, :prix, :note , :stock) 

;";

/* Upload image in img folder */
$uploadfile = 'img/'.$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

/*Each value is binded to be inserted in the INSERT INTO request */

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

/* Back to index page */
header('Location: index.php');

} else { header('location: error.php');}