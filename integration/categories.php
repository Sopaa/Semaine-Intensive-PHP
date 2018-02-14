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
        <a href="#" class="navLink">
          <li class="navItems">Nos Charcuteries</li>
        </a>
        <a href="login.php" class="navLink">
          <li class="navItems">Mon Compte</li>
        </a>
      </ul>
    </nav>
  </div>


  <ul class="foodClass">
    <li class="foodItem"><button class="btn-all" type="button" name="button">Tout</button></li>
    <li class="foodItem"><button class="btn-filter" data-category="boeuf" type="button" name="button">Bœuf</button></li>
    <li class="foodItem"><button class="btn-filter" data-category="agneau" type="button" name="button">Agneau</button></li>
    <li class="foodItem"><button class="btn-filter" data-category="veau" type="button" name="button">Veau</button></li>
    <li class="foodItem"><button class="btn-filter" data-category="porc"type="button" name="button">Porc</button></li>
  </ul>


  <div class="categoriesContainer">
    <div class="categoriesItems" data-category="boeuf">
      <img class="categoriesImg" src="../img/boeuf2.jpeg" alt="">
      <p class="categoriesName">Aberdeen Angus</p>
    </div>
    <div class="categoriesItems" data-category="boeuf" >
      <img class="categoriesImg" src="../img/boeuf6.jpeg" alt="">
      <p class="categoriesName">Blonde de Galice / Dry Aged</p>
    </div>
    <div class="categoriesItems" data-category="boeuf">
      <img class="categoriesImg" src="../img/angus.jpeg" alt="">
      <p class="categoriesName">Angus Uruguay</p>
    </div>
    <div class="categoriesItems" data-category="boeuf">
      <img class="categoriesImg" src="../img/boeuf4.jpeg" alt="">
      <p class="categoriesName">Argentine</p>
    </div>
    <div class="categoriesItems" data-category="boeuf" >
      <img class="categoriesImg" src="../img/boeuf7.jpeg" alt="">
      <p class="categoriesName">Charolaise</p>
    </div>
    <div class="categoriesItems" data-category="boeuf" >
      <img class="categoriesImg" src="../img/boeuf5.jpeg" alt="">
      <p class="categoriesName">Black Angus USA</p>
    </div>
    <div class="categoriesItems" data-category="boeuf">
      <img class="categoriesImg" src="../img/boeuf8.jpeg" alt="">
      <p class="categoriesName">Limousine</p>
    </div>
    <div class="categoriesItems" data-category="boeuf">
      <img class="categoriesImg" src="../img/Boeuf.jpg" alt="">
      <p class="categoriesName">Wagyu japonais</p>
    </div>
    <div class="categoriesItems" data-category="boeuf">
      <img class="categoriesImg" src="../img/boeuf9.jpeg" alt="">
      <p class="categoriesName">Simmental / Dry Aged</p>
    </div>
    <div class="categoriesItems" data-category="boeuf">
      <img class="categoriesImg" src="../img/boeuf10.jpeg" alt="">
      <p class="categoriesName">Wagyu australien</p>
    </div>
    <div class="categoriesItems" data-category="veau">
      <img class="categoriesImg" src="../img/veau2.jpeg" alt="">
      <p class="categoriesName">Veau</p>
    </div>
    <div class="categoriesItems" data-category="agneau">
      <img class="categoriesImg" src="../img/agneau5.jpeg" alt="">
      <p class="categoriesName">Agneau</p>
    </div>
    <div class="categoriesItems" data-category="porc">
      <img class="categoriesImg" src="../img/porc2.jpeg" alt="">
      <p class="categoriesName">Porc noir de Bigorre</p>
    </div>

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
