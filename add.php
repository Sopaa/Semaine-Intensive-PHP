<?php
require_once "functions.php";
head("Ajouter un Produit"); ?>

  <form action="doadd.php" method="post">
    <label for="">Nom</label> <input type="text" name="Name">
    <label for="">Categorie</label> <input type="text" name="Category">
    <label for="">Image</label> <input type="???" name="image">
    <label for="">Plaisir des yeux</label><input type="text" name="Pleasure">
    <label for="">Degustation</label> <input type="text" name="Tasting">
    <label for="">Origine</label> <input type="text" name="Origin">
    <input type="submit" value="addDB">
</from>


<?php
  foot(); ?>
