<?php
$username = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=DataUsers',$username, $password);
} catch (PDOException $exception) {
    die("Erreur");
}