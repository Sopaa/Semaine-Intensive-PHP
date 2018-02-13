<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 09:56
 */



require_once "connexion.php";


$request = 'SELECT
`id`,
`nom`,
`categorie`,
`image`,
`elevage`,
`morphologie`,
`plaisirDesYeux`,
`degustation`,
`origine`,
`note`

FROM
  `meat`
WHERE
`id` = :id  

;';

$stmt = $connection->prepare($request);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./dropzone.js"></script>
    <title>Document</title>
</head>
<body>
<form action="dodelete.php" method="post">
    <label for="id"> id : <input type="text" name="id" value="<?=$GET_['id'] ?>"></label>
    <label for=""> Êtes-vous sûr de vouloir supprimer <?=$row['nom'] ?> ? </label>


    <input type="submit" value="Supprimer">
</form>

</body>
