<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 11:08
 */

require_once "../app/backOffice/connexion.php";

/* request */
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
/* Get the id through the method GET, then execute the request */
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
<!-- Fill the fields with values returned in $row */ -->
  <h1 id="categorie" class="productTitle"><a href="categories.php?>" style="text-decoration: none; color: #FFFFFF;"><?=$row['categorie']?></a></h1>

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
        <p id="prix" class="price"><?=$row['prix']?> €/pièce</p>
      </div>
    </div>

    <div class="rightContainer">

        <!-- If element is empty, do not print the div -->
        <?php if(!empty($row['plaisirDesYeux'])) {?>
      <div class="productDescription">
        <h2 class="descriptionTitle">Plaisir des yeux</h2>
        <p id="plaisirdesyeux" class="descriptionText"><?=$row['plaisirDesYeux']?></p>
      </div>
        <?php } ?>

        <!-- If element is empty, do not print the div -->
        <?php if(!empty($row['elevage'])) {?>
      <div class="productDescription">
        <h2 class="descriptionTitle">Elevage</h2>
        <p id="elevage" class="descriptionText"><?=$row['elevage']?></p>
      </div>
        <?php } ?>

        <!-- If element is empty, do not print the div -->
        <?php if(!empty($row['degustation'])) {?>
      <div class="productDescription">
        <h2 class="descriptionTitle">Degustation</h2>
        <p id="degustation" class="descriptionText"><?=$row['degustation']?></p>
      </div>
        <?php } ?>

        <!-- If element is empty, do not print the div -->
        <?php if(!empty($row['origine'])) {?>
      <div class="productDescription">
        <h2 class="descriptionTitle">Origine</h2>
        <p id="origine" class="descriptionText"><?=$row['origine']?></p>
      </div>
        <?php } ?>


    </div>

  </div>

</body>

</html>
