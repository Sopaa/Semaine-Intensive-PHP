<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 10:21
 */


require_once "connexion.php";

$request = 'DELETE FROM
`meat`
WHERE
id = :id

;';


$stmt = $connection->prepare($request);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: index.php');