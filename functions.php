<?php

function head($title = "lol", $retourliste = true)
{
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/brian.css">
</head>
<body>
<?php
    if ($retourliste){
?>
    <a href="index.php"> &lt; Retour liste</a>
<?php
    }
?>
<?php
}
/**
 * footer html
 */
function foot(){
?>
</body>
</html>
<?php
}
