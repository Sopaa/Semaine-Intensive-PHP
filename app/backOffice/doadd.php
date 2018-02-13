<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 12/02/2018
 * Time: 11:45
 */

require_once "connexion.php";

if (!isset($_POST['id']) || !isset($_POST['nom']) || !isset($_POST['categorie']) || !isset($_FILES['image']['name'])||
    !isset($_POST['elevage']) || !isset($_POST['morphologie']) || !isset($_POST['plaisirDesYeux']) ||
    !isset($_POST['degustation']) || !isset($_POST['origine']) || !isset($_POST['note'])) {
    throw new Error('Please complete all the fields');
}


$request = "INSERT INTO
`meat` 
(`id`, `nom`, `categorie`, `image`, `elevage`, `morphologie`, `plaisirDesYeux`, `degustation`, `origine`, `note`)
VALUES 
(:id, :nom, :categorie, :image, :elevage, :morphologie, :plaisirDesYeux, :degustation, :origine, :note) 

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
$stmt->bindValue(':note', $_POST['note']);
$stmt->execute();

header('Location: index.php');