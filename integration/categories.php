<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 10:57
 */
session_start();

require_once "../app/backOffice/connexion.php";

/* Requête pour récupérer tous les éléments de la table meat */
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
;';

$stmt = $connection->prepare($request);
$stmt->execute();

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="../img/ViandeLogo.png">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/categories.css">

  <title>Categories</title>
</head>

<body>
  <div class="header">
      <div class="logoPart">
        <a href="homepage.php"><img class="navLogo" src="../img/meatLogo.png" alt="Logo"></a>
        <a href="homepage.php"><p class="navTitle">| Meat.</p></a>
      </div>
      <ul>
        <a href="#" class="navLink">
          <li class="navItems">Nos Viandes</li>
        </a>
        <a href="panier.php" class="navLink">
          <li class="navItems">Mon Panier ( <?=$_SESSION['panier']?> )</li>
        </a>
        <a href="login.php" class="navLink">
          <li class="navItems">Mon Compte</li>
        </a>
      </ul>
    </nav>
  </div>


  <ul class="foodClass">
    <li class="foodItem"><button class="btn-all" type="button" name="button">Tout</button></li>
    <li class="foodItem"><button class="btn-filter" data-category="Boeuf" type="button" name="button">Bœuf</button></li>
    <li class="foodItem"><button class="btn-filter" data-category="Agneau" type="button" name="button">Agneau</button></li>
    <li class="foodItem"><button class="btn-filter" data-category="Veau" type="button" name="button">Veau</button></li>
    <li class="foodItem"><button class="btn-filter" data-category="Porc"type="button" name="button">Porc</button></li>
  </ul>


  <div class="categoriesContainer">

<!-- Boucle pour l'affichage des divs -->
      <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>

    <div class="categoriesItems" data-category="<?=$row['categorie']?>">
        <a href="./product.php?id=<?=$row['id']?>">
      <img class="categoriesImg" src="../app/backOffice/img/<?=$row['image']?>" alt="">
        </a>
      <p class="categoriesName"><?=$row['nom']?></p>
    </div>


      <?php endwhile;?>

  </div>

  <footer>
    <div class="footer">
      <div class="socialContainer">
        <a href="#"><img class="socialImg" src="../img/amazon.png" alt="Amazon"></a>
        <a href="#"><img class="socialImg" src="../img/facebook.png" alt="Facebook"></a>
        <a href="#"><img class="socialImg" src="../img/twitter.png" alt="Twitter"></a>
      </div>
      <div class="copyright">
        <p class="underFooterCopyright">© Copyright 2018 Meat. | Mentions légales | CGV</p>
      </div>
    </div>
  </footer>

 <script type="text/javascript">
 var btn1 = document.querySelector('.btn-all');
 var btn2 = document.querySelectorAll('.btn-filter');
 var viande= document.querySelectorAll('.categoriesItems');

 for (var i = 0; i < btn2.length; i++) {
   btn2[i].addEventListener('click', function() {
     for (var i = 0; i < viande.length; i++) {

       if (this.dataset.category === viande[i].dataset.category) {
         viande[i].style.display = '';
       } else {
         viande[i].style.display = 'none';
       }
     }
   });
 }

 btn1.addEventListener('click', function() {
   for (var i = 0; i < viande.length; i++) {
     viande[i].style.display = '';
   }

 })
 </script>
</body>

</html>
