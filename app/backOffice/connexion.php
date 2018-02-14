<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 12/02/2018
 * Time: 10:34
 */

/* Paramètres de connexion à la db*/
$host = '127.0.0.1';
$dbname = 'SemaineIntensivePHP';
$username = 'root';
$password = 'root';

/* connexion à la db, on catch une eventuelle erreur de connexion*/
try {
    $connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';', $username, $password);

} catch (PDOException $exception){
    die($exception -> getMessage());
}


