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
/* Delete all the elements of the table where the id is equal to the one we get */
$request = 'DELETE FROM
`meat`
WHERE
id = :id

;';


$stmt = $connection->prepare($request);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

/* Back to index*/
header('Location: index.php');

} else { header('location: error.php');}