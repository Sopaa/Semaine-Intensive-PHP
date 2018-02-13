<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="doadd.php" method="post" enctype="multipart/form-data">
    <label for="id"> id : <input type="text" name="id"></label>
    <label for="nom"> nom : <input type="text" name="nom"></label>
    <label for="categorie"> categorie : <input type="text" name="categorie"></label>


    <label for="image" class="dropzone"> image : <input type="file" name="image"></label>

    <label for="elevage"> elevage : <input type="text" name="elevage"></label>
    <label for="morphologie"> morphologie : <input type="text" name="morphologie"></label>
    <label for="plaisirDesYeux"> plaisir des yeux : <input type="text" name="plaisirDesYeux"></label>
    <label for="degustation"> degustation : <input type="text" name="degustation"></label>
    <label for="origine"> origine : <input type="text" name="origine"></label>
    <label for="note"> note : <input type="text" name="note"></label>
    <label for="stock"> stock : <input type="number" name="stock"></label>

    <input type="submit" value="Ajouter">
</form>

</body>
</html>