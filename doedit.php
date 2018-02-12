<?php

if (!isset($_POST['id']) || !isset($_POST['nom']) || !isset($_POST['marque'])) {
    header('Location: index.php?error=nopostdataedit');
    exit;
}
require_once "connexion.php";
$requete = "UPDATE
  `garage`
SET
  `nom` = :nom,
  `marque` = :marque
WHERE
id = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':marque', $_POST['marque']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: details.php?id='.$_POST['id']);
