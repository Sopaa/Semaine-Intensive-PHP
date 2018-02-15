<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 15/02/2018
 * Time: 17:51
 */

session_start();

require_once "../app/backOffice/connexion.php";

?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/categories.css">

  <title>Document</title>
</head>

<body>
<h1 style="text-align: center; font-size: 30px; margin-top: 30px;"> Mon panier</h1>
<div class="flex" style="margin: 30px 30px; display: flex; height: 150px;">
<?php foreach ($_SESSION['panierStock'] as $item){
    $req = $connection->prepare('SELECT * FROM meat WHERE id = :id');
    $req->execute([':id' => $item]);
    $element = $req->fetch();
?>

<!-- Fill the fields with values returned in $row */ -->
    <div style="margin-left: 20px;">
    <h1 style="margin-bottom: 10px;" ><?=$element['nom']?></h1>
    <img style="width: auto;height: 150px; " id="image" class="productImg" src="../app/backOffice/img/<?=$element['image']?>" alt="">
    </div>
<?php } ?>
    </div>
</body>

</html>
