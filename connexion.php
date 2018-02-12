<?php

try {
    $conn = new PDO('mysql:dbname=productDB;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
/**
 * gestion des erreurs de retour d'execution de PDO
 * @param PDOStatement $stmt
 * @return void
 */
function errorHandler(PDOStatement $stmt) : void
{
    if ($stmt->errorCode() !== '00000') {
        var_dump($stmt->errorInfo());
        die();
    }
}
