<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 10:57
 */
session_start();


if(isset($_SESSION['logged'])){
require_once "connexion.php";

/*
if (empty($_POST['id']) || empty($_POST['nom']) || empty($_POST['categorie']) || empty($_FILES['image']['name'])||
    empty($_POST['elevage']) || empty($_POST['morphologie']) || empty($_POST['plaisirDesYeux']) ||
    empty($_POST['degustation']) || empty($_POST['origine']) || empty($_POST['note'])|| empty($_POST['stock'])) {
    header('Location: index.php?error');
    exit;
}*/

/* Requête pour sélectionner tous les éléments de la tables meat à l'id récupéré en GET dans l'URL*/
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
    <link rel="shortcut icon" href="../../img/ViandeLogo.png">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/edit.css">
    <title>Edit</title>
</head>
<body>

<div class="content">
    <a href="index.php">
        <img class="logo" src="../../img/ViandeLogo.png" alt="Logo"></a>
    <div class="formContainer">

        <h1 class="title">Modifier les produits.</h1>

<!-- On remplit notre form avec les valeurs des éléments de la db puis on les renvoit en POST -->
<form class="form" action="doedit.php" method="post" enctype="multipart/form-data">
    <div class="formFlex">
    <input class="loginInput" type="number" placeholder="Identifiant" name="id" value="<?=$row['id'] ?>">
    <input class="loginInput" type="text" placeholder="Nom" name="nom" value="<?=$row['nom'] ?>">
    <input class="loginInput" type="text" placeholder="Catégorie" name="categorie" value="<?=$row['categorie'] ?>">


    <input class="loginInput" type="file" placeholder="Image" name="image" value="<?=$row['image'] ?>">

    <input class="loginInput" type="text" placeholder="Élevage" name="elevage" value="<?=$row['elevage'] ?>">
    <input class="loginInput" type="text" placeholder="Morphologie" name="morphologie" value="<?=$row['morphologie'] ?>">
    </div>
    <div class="formFlex">
    <input class="loginInput" type="text" placeholder="Plaisir des yeux" name="plaisirDesYeux" value="<?=$row['plaisirDesYeux'] ?>">
    <input class="loginInput" type="text" placeholder="Dégustation" name="degustation" value="<?=$row['degustation'] ?>">
    <input class="loginInput" type="text" placeholder="Origine" name="origine" value="<?=$row['origine'] ?>">
    <input class="loginInput" type="number" placeholder="Prix" name="prix" value="<?=$row['prix'] ?>">
    <input class="loginInput" type="number" placeholder="Note" name="note" value="<?=$row['note'] ?>">
    <input class="loginInput" type="number" placeholder="Stock" name="stock" value="<?=$row['stock'] ?>">
    </div>
    <input class="submitInput" type="submit" value="Modifier">
</form>
    </div>

</body>
</html>

<?php } else { header('location: error.php');} ?>