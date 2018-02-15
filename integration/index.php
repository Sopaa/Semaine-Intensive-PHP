<?php
session_start();
$_SESSION['panier'] = 0;
$_SESSION['panierStock'] = [];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/accueil.css">
  <link rel="shortcut icon" href="../img/ViandeLogo.png">
  <title>Meat.</title>
</head>

<body>

    <div class="mid">
      <a href="homepage.php"><img class="logo" src="../img/ViandeLogo.png" alt=""></a>
        <a href="homepage.php"><h1>| Meat</h1></a>
    </div>

</body>

</html>
