<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 09:56
 */



require_once "connexion.php";

$request = 'UPDATE
`meat`
SET 
`id` = :id,
`nom` = :nom,
`categorie` = :categorie,
`image` = :image,
`elevage` = :elevage,
`morphologie` = :morphologie,
`plaisirDesYeux` = :plaisirDesYeux,
`degustation` = :degustation,
`origine` = :origine,
`prix` = :prix,
`note` = :note,
`stock` = :stock

WHERE

id = :id

;';

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

