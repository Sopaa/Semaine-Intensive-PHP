<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 10:21
 */


require_once "connexion.php";

/* On supprime tous les éléments de la table où l'id est égal à celui qu'on récupère*/
$request = 'DELETE FROM
`meat`
WHERE
id = :id

;';


$stmt = $connection->prepare($request);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

/* Retour à l'index*/
header('Location: index.php');