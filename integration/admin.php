<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 15/02/2018
 * Time: 11:57
 */

require_once "connexion.php";

if (true) {
    $email = $_POST['email'];
    $password = $_POST['password'];

//Check if input is not empty
    if (!empty($email) && !empty($password)) {
//Get mail and password from db
        $requete = "SELECT
`email`,
`password`
FROM
`loginAdmin`
WHERE
`email` = :email and
`password` = :password
;";

        $stmt = $conn->prepare($requete);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            header('location: ../app/backOffice/index.php');
        }

    }
}
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="meatLogo.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Meat</title>
</head>

<body>
<div class="content">
    <img class="logo" src="img/ViandeLogo.png" alt="Logo">
    <div class="formContainer">

        <h1 class="title">Bienvenue sur Meat.</h1>


        <form class="" action="" method="post">
            <div class="formFlex">
                <input class="loginInput" type="email" name="email" value="" placeholder="Votre Email">
                <input class="loginInput" type="password" name="password" value="" placeholder="Votre mot de passe">
                <input class="submitInput" type="submit" name="submit" value="Se Connecter">
            </div>
        </form>



        <div class="footer">
            <div class="socialContainer">
                <a href="#"><img class="socialImg" src="img/amazon.png" alt="Amazon"></a>
                <a href="#"><img class="socialImg" src="img/facebook.png" alt="Facebook"></a>
                <a href="#"><img class="socialImg" src="img/twitter.png" alt="Twitter"></a>
            </div>

            <div class="copyright">
                <p class="underFooterCopyright">© Copyright 2017 Meat. | Mentions légales | CGV</p>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php
require_once "connexion.php";

$password = $_POST['password'];
$email = $_POST['email'];

$requete = "INSERT INTO `loginAdmin` (`email`, `password`) VALUES (:email, :password);";

$stmt = $conn->prepare($requete);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

$stmt->execute();

?>
