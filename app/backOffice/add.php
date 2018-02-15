<?php
session_start();


if(isset($_SESSION['logged'])){?>

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

        <h1 class="title"> Ajouter un produit </h1>

        <!-- On remplit notre form avec les valeurs des éléments de la db puis on les renvoit en POST -->
        <form class="form" action="doadd.php" method="post" enctype="multipart/form-data" onsubmit="verifForm">
            <div class="formFlex">
                <input class="loginInput" placeholder="Identifiant" type="number" name="id" >
                <input class="loginInput" placeholder="Nom" type="text" name="nom" >
                <input class="loginInput" placeholder="Catégorie" type="text" name="categorie" >


                <input class="loginInput" placeholder="Image" type="file" name="image" >

                <input class="loginInput" placeholder="Élevage" type="text" name="elevage" >
                <input class="loginInput" placeholder="Morphologie" type="text" name="morphologie" >
            </div>
            <div class="formFlex">
                <input class="loginInput" placeholder="Plaisir des yeux" type="text" name="plaisirDesYeux" >
                <input class="loginInput" placeholder="Dégustation" type="text" name="degustation" >
                <input class="loginInput" placeholder="Origine" type="text" name="origine" >
                <input class="loginInput" placeholder="Prix" type="number" name="prix" >
                <input class="loginInput" placeholder="Note" type="number" name="note" >
                <input class="loginInput" placeholder="Stock" type="number" name="stock" >
            </div>
            <input class="submitInput" type="submit" value="Ajouter">
        </form>
    </div>

</body>
</html>

<?php } else { header('location: error.php');} ?>