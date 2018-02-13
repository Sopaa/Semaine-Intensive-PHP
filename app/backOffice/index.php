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
`note`

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
    <title>Document</title>
</head>
<body>

<?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>

    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['nom']?></td>
        <td><a href="details.php?id=<?=$row['id']?>"></a></td>
        <td>
            <a href="delete.php?id=<?=$row['id']?>"> Supprimer </a>
            <a href="edit.php?id=<?=$row['id']?>"> Modifier </a>
        </td>
    </tr>


<?php endwhile;?>

</body>
</html>




