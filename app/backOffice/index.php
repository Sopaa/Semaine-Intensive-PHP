<?php
/**
 * Created by PhpStorm.
 * User: ayshiff
 * Date: 13/02/2018
 * Time: 10:57
 */

require_once "connexion.php";

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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/backoffice.css">
    <title>Document</title>
</head>
<body>

<div class="content">
    <header class="headerContainer">
        <a href="index.php"><img src="../../img/ViandeLogo.png" alt="Logo"></a>
    </header>

    <div class="itemsContainer">

<?php
if (isset($_GET['error'])) {
    ?>
    echo 'error';
    <div style="color: red"><?=$_GET['error']?></div>
    <?php
}
?>


        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>


    <div class="edit">
        <div class="edit1">
            <a href="details.php?id=<?=$row['id']?>"><img class="img" src="./img/<?=$row['image']?>" alt=""></a>
            <a href="edit.php?id=<?=$row['id']?>"><img class="setting" src="../../img/setting.png" alt="setting"></a>
        </div>
        <div class="edit2">
            <p class="productName"><?=$row['nom'] ?></p>
            <a href="delete.php?id=<?=$row['id']?>"><img class="setting" src="../../img/garbage.png" alt="setting"></a>
        </div>
    </div>


    <?php endwhile;?>

        <a href="add.php">
            <div class="add">
                <div class="plus">
                    <svg width="46px" height="44px" viewBox="0 0 46 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="backoffice" transform="translate(-1214.000000, -585.000000)" fill="#9B9B9B">
                                <g id="body" transform="translate(98.000000, 147.000000)">
                                    <g id="PLUS" transform="translate(1032.000000, 380.000000)">
                                        <rect id="Rectangle" x="100" y="58" width="14" height="44"></rect>
                                        <polygon id="Rectangle" points="129.271261 73.4485282 129.271261 87.0194341 84.7287386 87.0194341 84.7287386 73.4485282"></polygon>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </a>

    </div>
</div>



</body>
</html>




