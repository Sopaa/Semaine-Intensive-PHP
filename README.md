
# Semaine-Intensive-PHP

#Projet Meat.
Nous avons developpé en PHP/MySQL et intégré en HTML/CSS une application Web proposant un service de livraison de viandes de qualité superieure.

*  id (entier)
*  Nom (string 90)
*  Catégorie (string 40)
*  Image (string 90)
*  Elevage (texte)
*  Morphologie (texte)
*  PlaisirDesYeux (texte)
*  Dégustation (texte)
*  Origine VARCHAR(90)
*  Prix (entier)
*  Note (entier)
*  Stock (entier)

#SiteMap
![](/img/sitemap.png)

### Formulaire
GET /add.php

### Ajout dans la base de données
```sql

INSERT INTO `meat` (`id`, `nom`, `categorie`, `image`, `elevage`,`morphologie`,`plaisirDesYeux`,`degustation`,`origine`,`prix`,`note`,`stock`) VALUES ('1,'Aberdeen Angus','Boeuf','AberdeenAgnus.jpeg', 'Les animaux Angus ont une très grande capacité de développement aussi
bien en élevage extensif au pâturage qu’en élevage
intensif. Ils sont spécialement utilisés pour la production de veaux sevrés prêts
à l’abattage.', 'Elle porte une robe uniforme qui peut être rouge sombre (Red Angus)
ou noire (Black Angus). Ses muqueuses sont noires. C’est une vache de taille moyenne,
135 cm au garot pour 650 à 700 kg, le taureau mesurant 145 cm pour de 800 à 1 000 kg.
Elle a une stature massive due à des pattes plutôt courtes. Elle est naturellement sans cornes.
Le gène responsable de l’absence des cornes a un caractère dominant (ce qui signifie que les
hybrides de première génération seront sans cornes). Ce caractère est utilisé pour produire des
hybrides sans cornes (moins de blessures entre individus en élevage intensif et chez les vachers).',
'Ses principales caractéristiques sont sa forte concentration en graisses intramusculaires (persillé).',
'Cette viande reflète les caractéristiques de sa race et de son environnement : robustesse et grands espaces.
Sa texture souple et moelleuse lui confère une jutosité sans pareil et offre une palette de saveurs aux notes
florales et herbacées. Une viande d’une grande élégance !', 'Espagne','12', '4', '7);

```

POST /doadd.php

## Read

### Lister
```sql
SELECT `id`, `nom`, `categorie`, `image`, `elevage`,`morphologie`,`plaisirDesYeux`,`degustation`,`origine`,`prix`,`note`,`stock` FROM `meat`;
```
GET /index.php

### Visualiser les détails
```sql
SELECT `id`, `nom`, `categorie`, `image`, `elevage`,`morphologie`,`plaisirDesYeux`,`degustation`,`origine`,`prix`,`note`,`stock` FROM `meat` WHERE id = :id
;
```
GET /details.php?id=:id

## Update

### Formulaire
```sql
SELECT
`id`,`nom`,`categorie`,`image`,`elevage`,`morphologie`,`plaisirDesYeux`,`degustation`,`origine`,`prix`,`note`,`stock` FROM `meat` WHERE `id` = :id  
;
```
GET /edit.php?id=:id

### Modifier les données dans la base
```sql
if(empty($_FILES['image']['name'])){
    $request = UPDATE
`meat`
SET `id` = :id,`nom` = :nom,`categorie` = :categorie,`elevage` = :elevage,`morphologie` = :morphologie,`plaisirDesYeux` = :plaisirDesYeux,`degustation` = :degustation,`origine` = :origine,`prix` = :prix,`note` = :note,`stock` = :stock WHERE id = :id
;
} else {
    $request = UPDATE
`meat`
SET `id` = :id,`nom` = :nom,`categorie` = :categorie,`image` = :image,`elevage` = :elevage,`morphologie` = :morphologie,`plaisirDesYeux` = :plaisirDesYeux,`degustation` = :degustation,`origine` = :origine,`prix` = :prix,`note` = :note,`stock` = :stock WHERE id = :id
```
POST /doedit.php

## Delete

### demande de confirmation
GET /delete.php?id=:id

### Effacer dans la base
```sql
DELETE FROM `meat` WHERE id = :id
;
```
POST /dodelete.php
