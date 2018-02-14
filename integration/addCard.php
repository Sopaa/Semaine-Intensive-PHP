<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 09:56
 */



require_once "../app/backOffice/connexion.php";

    $request = 'UPDATE
`meat`
SET 
`stock` = :stock

WHERE

id = :id

;';

$stmt = $connection->prepare($request);

$stmt->bindValue(':id', htmlentities($_GET['id']));

/*if($_GET['stock']-1 <= 0){
    $stmt->bindValue(':stock', htmlentities($_GET['stock']));
} else {*/
    $stmt->bindValue(':stock', htmlentities($_GET['stock'])-1);
/*}*/
$stmt->execute();

header('Location: categories.php');