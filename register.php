<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="meatLogo.ico">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/register.css">
  <title>Meat</title>
</head>

<body>
  <div class="content">
    <img class="logo" src="img/ViandeLogo.png" alt="Logo">
    <h1 class="title">Inscription.</h1>
    <form action="index.html" method="post">
      <div class="container">

        <div class="containerLeft">
          <input class="loginInput" type="text" name="Nom" placeholder="Nom">
          <input class="loginInput" type="email" name="Mail" placeholder="Adresse Mail">
          <input class="loginInput" type="text" name="Adress" placeholder="Adresse">
          <input class="loginInput" type="number" name="postalCode" placeholder="Code postal">
        </div>

        <div class="containerRight">
          <input class="loginInput" type="text" name="name" placeholder="Prénom">
          <input class="loginInput" type="password" name="password" placeholder="Votre mot de passe">
          <input class="loginInput" type="text" name="age" placeholder="Age">
        </div>

      </div>
      <input class="submitInput" type="submit" name="submit" value="S'inscrire">
  </form>
  <div class="footer">
    <div class="copyright">
      <p class="underFooterCopyright">© Copyright 2017 Meat. | Mentions légales | CGV</p>
    </div>
  </div>
  </div>
</body>

</html>