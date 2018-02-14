<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 11:08
 */

require_once "../app/backOffice/connexion.php";

/* requête */
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
/* On récupère l'id en get puis on effectue la requête*/
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="meatLogo.ico">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/product.css">
  <title>Document</title>
</head>

<body>
<!-- On remplit nos champs avec les valeurs retournées dans $row -->
  <h1 id="categorie" class="productTitle"><?=$row['categorie']?></h1>

  <div class="mainContainer">

    <div class="leftContainer">
      <div class="subContainer">

        <h2 id="nom" class="subtitle"><?=$row['nom'] ?></h2>
        <p id="note" class="note"><?=$row['note']?>/5</p>
      </div>
      <img id="image" class="productImg" src="../app/backOffice/img/<?=$row['image']?>" alt="">
      <div class="cartContainer">
        <img class="cart" src="../img/panier.png" alt="">
          <?php if($row['stock'] > 0) { ?>
          <a href="addCard.php?id=<?=$row['id'] ?>&stock=<?=$row['stock']?> ">
        <button class="addCart" type="button" name="button">Ajouter au panier</button>
              </a>
          <?php } else { ?>
              <a href="">
                  <button class="addCart" type="button" name="button">Ajouter au panier</button>
                  <p style="color: red; font-size: 14px; margin-top: 8px;"> Plus de produit en stock !</p>
              </a>
          <?php }  ?>
      </div>
      <div class="priceContainer">
        <p id="prix" class="price"><?=$row['prix']?> €/kg</p>
      </div>
    </div>

    <div class="rightContainer">

        <!-- Si l'élément est vide, on n'affiche pas la div -->
        <?php if(!empty($row['plaisirDesYeux'])) {?>
      <div class="productDescription">
        <h2 class="descriptionTitle">Plaisir des yeux</h2>
        <p id="plaisirdesyeux" class="descriptionText"><?=$row['plaisirDesYeux']?></p>
      </div>
        <?php } ?>

        <!-- Si l'élément est vide, on n'affiche pas la div -->
        <?php if(!empty($row['elevage'])) {?>
      <div class="productDescription">
        <h2 class="descriptionTitle">Elevage</h2>
        <p id="elevage" class="descriptionText"><?=$row['elevage']?></p>
      </div>
        <?php } ?>

        <!-- Si l'élément est vide, on n'affiche pas la div -->
        <?php if(!empty($row['degustation'])) {?>
      <div class="productDescription">
        <h2 class="descriptionTitle">Degustation</h2>
        <p id="degustation" class="descriptionText"><?=$row['degustation']?></p>
      </div>
        <?php } ?>

        <!-- Si l'élément est vide, on n'affiche pas la div -->
        <?php if(!empty($row['origine'])) {?>
      <div class="productDescription">
        <h2 class="descriptionTitle">Origine</h2>
        <p id="origine" class="descriptionText"><?=$row['origine']?></p>
      </div>
        <?php } ?>

      <div class="socialContainer">
        <a href="#"><img class="socialImg" src="../img/amazon.png" alt="Amazon"></a>
        <a href="#"><img class="socialImg" src="../img/facebook.png" alt="Facebook"></a>
        <a href="#"><img class="socialImg" src="../img/twitter.png" alt="Twitter"></a>
      </div>


    </div>

  </div>

</body>

</html>
