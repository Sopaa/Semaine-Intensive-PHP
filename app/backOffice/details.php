<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 11:08
 */

require_once "connexion.php";

/* requête SELECT*/
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
    <title>Document</title>
</head>
<body>
<h1> Details de <?=$row['nom'] ?></h1>

<tr>
    <td><?=$row['id']?></td>
    <td><?=$row['categorie']?></td>
    <td><?=$row['image']?></td>
    <td><?=$row['elevage']?></td>
    <td><?=$row['morphologie']?></td>
    <td><?=$row['plaisirDesYeux']?></td>
    <td><?=$row['degustation']?></td>
    <td><?=$row['origine']?></td>
    <td><?=$row['note']?></td>
    <td><?=$row['stock']?></td>
    <td><a href="details.php?id=<?=$row['id']?>"><?=$row['nom']?></a></td>
    <td>
        <a href="delete.php?id=<?=$row['id']?>"> Supprimer </a>
        <a href="edit.php?id=<?=$row['id']?>"> Modifier </a>
    </td>
</tr>

</form>

</body>