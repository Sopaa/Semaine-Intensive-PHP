<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 12/02/2018
 * Time: 10:34
 */

$host = 'localhost';
$dbname = 'SemaineIntensivePHP';
$username = 'root';
$password = '';

try {
    $connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';', $username, $password);

} catch (PDOException $exception){
    die($exception -> getMessage());
}


