<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="../img/ViandeLogo.png">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/login.css">
  <title>Meat</title>
</head>

<body>
  <div class="content">
      <a href="homepage.php">
        <img class="logo" src="../img/ViandeLogo.png" alt="Logo">
      </a>
    <div class="formContainer">

      <h1 class="title">Bienvenue sur Meat.</h1>


      <form class="" action="homepage.php" method="post">
        <div class="formFlex">
          <input class="loginInput" type="email" name="id" value="" placeholder="Votre Email">
          <input class="loginInput" type="password" name="password" value="" placeholder="Votre mot de passe">
          <p class="formText">Vous n’avez pas de compte ? <strong><a class="Register" href="register.php">Inscrivez-vous !</a></strong></p>
          <input class="submitInput" type="submit" name="sumbit" value="Se Connecter">
        </div>
      </form>



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
    </div>
  </div>

</body>

</html>
