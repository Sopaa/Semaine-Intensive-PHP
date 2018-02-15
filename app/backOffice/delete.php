<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 09:56
 */



require_once "connexion.php";

/* Requête */
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
`prix`,
`note`,
`stock`

FROM
  `meat`
WHERE
`id` = :id  

;';

/* On récupère l'id en get qu'on passe dans la requête*/
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
    <link rel="shortcut icon" href="../../img/ViandeLogo.png">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/delete.css">
    <title>Delete</title>
</head>
<body>
<h1 class="title">Suppresion d'un élément.</h1>
<form class="alert" action="dodelete.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id'] ?>">
    <label for=""> Êtes-vous sûr de vouloir supprimer cet élément <?=$row['nom'] ?> ? </label>


    <input class="submitBtn" type="submit" value="Supprimer">
</form>

</body>
