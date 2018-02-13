<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 09:56
 */

require_once "connexion.php";

/*
if (empty($_POST['id']) || empty($_POST['nom']) || empty($_POST['categorie']) || empty($_FILES['image']['name'])||
    empty($_POST['elevage']) || empty($_POST['morphologie']) || empty($_POST['plaisirDesYeux']) ||
    empty($_POST['degustation']) || empty($_POST['origine']) || empty($_POST['note'])|| empty($_POST['stock'])) {
    header('Location: index.php?error');
    exit;
}*/


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
<form action="doedit.php" method="post">
    <label for="id"> id : <input type="text" name="id" value="<?=$row['id'] ?>"></label>
    <label for="nom"> nom : <input type="text" name="nom" value="<?=$row['nom'] ?>"></label>
    <label for="categorie"> categorie : <input type="text" name="categorie" value="<?=$row['categorie'] ?>"></label>


    <label for="image"> image : <input type="file" name="image" value="<?=$row['image'] ?>"></label>

    <label for="elevage"> elevage : <input type="text" name="elevage" value="<?=$row['elevage'] ?>"></label>
    <label for="morphologie"> morphologie : <input type="text" name="morphologie" value="<?=$row['morphologie'] ?>"></label>
    <label for="plaisirDesYeux"> plaisir des yeux : <input type="text" name="plaisirDesYeux" value="<?=$row['plaisirDesYeux'] ?>"></label>
    <label for="degustation"> degustation : <input type="text" name="degustation" value="<?=$row['degustation'] ?>"></label>
    <label for="origine"> origine : <input type="text" name="origine" value="<?=$row['origine'] ?>"></label>
    <label for="prix"> origine : <input type="number" name="prix" value="<?=$row['prix'] ?>"></label>
    <label for="note"> note : <input type="text" name="note" value="<?=$row['note'] ?>"></label>
    <label for="stock"> stock : <input type="text" name="stock" value="<?=$row['stock'] ?>"></label>

    <input type="submit" value="Modifier">
</form>

</body>
</html>