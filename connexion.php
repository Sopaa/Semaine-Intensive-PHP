<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 12/02/2018
 * Time: 10:34
 */

try {
    $connection = new PDO('mysql:host=localhost;dbname=SemaineIntensivePHP;', 'root', '');

} catch (PDOException $exception){
    die($exception -> getMessage());
}