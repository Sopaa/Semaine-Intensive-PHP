<?php
require_once "functions.php";
head("Ajouter truc");
?>
    <form action="doadd.php" method="post">
        <label for="">pseudo</label> <input type="text" name="nom" maxlength="20">
        <label for="">password</label> <input type="password" name="password" maxlength="20">
        <input type="submit" value="Ajouter">
    </form>
<?php foot();?>