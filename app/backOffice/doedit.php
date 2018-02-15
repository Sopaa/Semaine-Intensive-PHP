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

/* Si l'utilisateur ne rentre pas d'image, on garde celle existante, sinon on utilise celle qu'il a rentré */
if(empty($_FILES['image']['name'])){
    $request = 'UPDATE
`meat`
SET 
`id` = :id,
`nom` = :nom,
`categorie` = :categorie,
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
} else {
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

    /* On ulpoad l'image dans le dossier img à la racine de backOffice*/
    $uploadfile = 'img/'.$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

    /* Si l'image a un poids supérieur à 1000 octets, on renvoit une erreur
    if($_FILES['image']['size'] > 1000) {
        throw new Exception('Fichier trop volumineux');
    }*/
}



$stmt = $connection->prepare($request);
$stmt->bindValue(':id', htmlentities($_POST['id']));
$stmt->bindValue(':nom', htmlentities($_POST['nom']));
$stmt->bindValue(':categorie', htmlentities($_POST['categorie']));

if(!empty($_FILES['image']['name'])) {
    $stmt->bindValue(':image', htmlentities($_FILES['image']['name']));
}

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

 } else { header('location: error.php');}