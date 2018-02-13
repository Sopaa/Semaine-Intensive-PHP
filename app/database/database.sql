


CREATE TABLE meat (
  id INT PRIMARY KEY,
  nom VARCHAR(90),
  categorie VARCHAR (40),
  image VARCHAR(90),
  elevage TEXT,
  morphologie TEXT,
  plaisirDesYeux TEXT,
  degustation TEXT,
  origine VARCHAR(90),
  prix INT,
  note INT,
  stock INT
);


INSERT INTO meat
VALUES (1,'Aberdeen Angus','Boeuf','./img', 'Les animaux Angus ont une très grande capacité de développement aussi
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
        florales et herbacées. Une viande d’une grande élégance !', 'Espagne',12, 4, 7
),
  (2,'Blonde de Galice / Dry Aged','Boeuf','./img', 'Chaque bête dispose d’un grand espace pour
évoluer et ne subit aucun stress durant tout le processus d’élevage, et ce jusqu’à l’abattage.
Deux facteurs essentiels pour le bien-être de l’animal et nécessaires pour obtenir une viande tendre.',
   'La Blonde de Galice porte une robe froment unie, avec des nuances pouvant aller du blond clair au rouge. Ses
   pattes sont plus claires et ses muqueuses sont rosées. Ses cornes sont courtes, claires à pointe noire. C''est
   une race de grande taille, 135-150 cm au garrot.',
   'Ses principales caractéristiques sont sa forte concentration en graisses intramusculaires (persillé). Grâce à
   la technique du « dry age », qui consiste à faire rassir la viande à maturation, la maison garantit à cette
   viande au goût unique une chair optimale.',
   'Les amateurs apprécieront son goût légèrement épicé et salin, dû certainement à sa proximité avec l’océan : ces
   animaux se nourrissent exclusivement d’herbe, de trèfles et de plantes qui ne poussent que dans cette zone au
   climat si particulier.', 'Espagne',9, 4, 7
  ),
  (3,'Angus Uruguay','Boeuf','./img', 'Acère (sans cornes), l’Angus a été introduite en Irlande vers 1860 avant
d’être exportée dans le monde entier. Sa robe est uniforme, allant du rouge sombre au noir.', '',
   '',
   'Entrecôte - faux-filet - Rumsteak - Grillés au charbon ou saisie dans une poêle en fonte , cette viande fera
   le bonheur de tous à un prix tout doux.', 'Uruguay',11, 4, 7
  ),
  (4,'Argentine','Boeuf','./img', 'De tous temps, cette viande a fait la fierté des Argentins. Elle bénéficie
d''immenses étendues d''herbage qui favorisent considérablement sa croissance et d’un élevage en plein air qui
lui confère un niveau de qualité incomparable.', '' ,
   'Pièce préférée des Argentins, la noix d’entrecôte ou « Ribeye » se caractérise par une chair très aromatique
   et une jutosité incroyable.',
   'En matière de cuisson, les “parrilladas” ou “asados” sont les plus appréciées : ce sont des grillades effectuées
   avec d’énormes morceaux de viande d''environ 800g tranchés dans le filet. Un vrai régal à la "plancha" ou au
   barbecue pour les vrais amateurs de viande !', 'Argentine',6, 4, 7
  ),
  (5,'Charolaise','Boeuf','./img', 'Aujourd''hui, les effectifs français, répartis dans tous les départements,
représentent plus de 1,7 millions de vaches. Les qualités bouchères de la Charolaise sont aujourd''hui appréciées
dans plus de 70 pays (dont le Mexique et l''Ukraine), où son succès doit également beaucoup à des croisements
effectués avec des races locales, comme avec le zébu par exemple.', 'La Charolaise est une vache très grande
(1,45 mètres au garrot), musclée (avec une culotte « rebondie »), plantée sur des membres courts mais bien
solides. Elle est de couleur blanche tirant parfois vers le crème et pèse en moyenne de 700 à 1.200 kg. Son
chignon est très large et long, recouvert de poils épais.',
   'Elle fournit une viande d’une grande succulence, avec une présence assez discrète des graisses.',
   'Elle présente des saveurs animales et héminiques fortes, nettes et prolongées.', 'France',12, 4, 7
  ),
  (6,'Black Angus USA','Boeuf','./img', 'C’est au coeur des Grandes Plaines des États-Unis que l’Angus américain
est élevé à l’air libre. Une alimentation contrôlée, composée exclusivement d’herbes, suivi d’un régime de cent
jours à base de céréales minutieusement choisies, donnent à cette viande un goût exceptionnel. Les bovins nourris
aux céréales produisent de manière constante des viandes dont la tendreté et la saveur les différencient
nettement de la plupart des autres viandes. Leur secret ? Seul un nombre limité de races est utilisé.', 'De taille
moyenne, 135 cm au garot pour 650 à 700 kg, l’animal porte une robe uniforme noire ou rouge, bien que du blanc
puisse apparaître sur ses mamelles. Ses muqueuses sont noires et elle est naturellement sans cornes.',
   'Le Black Angus USA se distingue par un persillage exceptionnel ("marbling" en anglais). Le marbrage - graisse
   intramusculaire dans la partie maigre - constitue un facteur déterminant de la qualité de la viande. Le marbrage
   exceptionnel que l’on retrouve dans le Black Angus USA résulte de sa finition en feed lot ( maïs à volonté).',
   'Ses saveurs sont très développées, avec une prédominance de gras fondu et d’animalité. Même si les nutritionnistes
   froncent les sourcils, les amateurs de viande en sont fans! Reconnue dans le monde entier pour sa tendreté, sa
   succulence et son goût unique, la Black Angus USA est une viande d’exception très appréciée des connaisseurs.'
    , 'USA',12, 4, 7
  ),
  (7,'Limousine','Boeuf','./img', 'Actuellement, la race Limousine est la 2ème race à viande française avec 1 million
de vaches. Sa renommée actuelle repose sur ses qualités maternelles, sa longévité et sa facilité d''élevage (même
si son caractère est parfois un peu trop ... « rustique “ ! ).', 'La Limousine est une race bouchère de grand
format , à la robe froment vif, plus claire sous le ventre et autour des yeux et du mufle, avec des muqueuses
rose clair.',
   'La viande limousine est une viande fine, avec une graisse bien répartie et une jutosité importante, autant
   appréciée par les consommateurs qui la classent régulièrement en tête des tests de dégustation que par les
   bouchers qui reconnaissent aux carcasses limousines un rendement élevé en viande et en morceaux nobles.',
   'La Limousine offre une gamme complète de saveurs : animalité, gras déployé, impressions herbacées, parfois
   florales.'
    , 'France',12, 4, 7
  ),
  (8,'Wagyu japonais','Boeuf','./img', 'De robe rouge ou noire, le Wagyu est connu pour sa grande capacité à fixer
le persillé et le marbré qui est la conséquence d’une alimentation surveillée à base de paille de riz, de mais et
 de levure de bière.', '', '',
   'Le boeuf japonais qualifiée de « caviar de la viande », fait merveille dans toutes sortes de cuisines. On peut
   le griller en steak, l’utiliser pour des plats japonais comme le shabu shabu, le trancher et le frire ou le faire
   sauter rapidement au wok.', 'Japon',12, 4, 7
  ),
  (9,'Simmental / Dry Aged','Boeuf','./img', 'Cette qualité de viande se traduit par un élevage de boeufs nourrit
au grand air dans les alpages avec pour aliments principaux l''herbe et le fourrage. Ces bêtes à tête blanche
et au pelage clair reconnaissables entre toutes produisent une viande musculeuse, goûteuse et persillée, avec
très peu de gras. Cette saveur particulière est due à "un régime de finition" poursuivit à l''étable durant
trois mois. La maturité nécessaire à cette viande est de 3 à 4 ans.', 'Cette bonne laitière de grande taille
(1,40 m au garrot et 700 à 850 kg pour une vache adulte ) se disitingue par une musculature puissante et une
bonne aptitude au parcours. Sa robe varie du froment au rouge sombre; sa tête et ses membres sont en grande
partie blancs.',
   'La Simmental donne une viande musculeuse et goûteuse. Grâce à la technique du “dry age”, qui consiste à faire
   rassir la viande jusqu’à maturation, elle offre une viande de belle qualité et une finesse du grain prononcés,
   des saveurs riches et beaucoup de jutosité.',
   'Avec sa chair rose et fine, elle offre une saveur aromatique et persillée très agréable en bouche. Un pur délice
         pour tous les amateurs de viande !', 'Espagne',12, 4, 7
  ),
  (10,'Wagyu australien','Boeuf','./img', 'Le Wagyu a migré depuis quelques dizaines d’années en Australie et en
Nouvelle Zélande, et en petit nombre aux Etats-Unis. Depuis peu de temps, quelques animaux Wagyu sont implantés
en France.', 'Ces races portent une robe rouge ou noire ( celle de Kobe est noire). Elles présentent une taille
moyenne, autour de 600 kg, et une silhouette massive avec une encolure forte.',
   'La viande de Wagyu est connue pour sa grande capacité à fixer le persillé et le marbré. Cette aptitude est
   exploitée à l’extrême avec la suralimentation du bœuf de Kobé, dont la viande surmarbrée est destinée à des
   amateurs japonais ou étrangers très avertis. L’Australie et la Nouvelle Zélande produisent pour l’Europe des
   viandes de Wagyu très persillées, marbrées, à forte saveur de gras fondu, voire de beurre. Mais on est loin
   du bœuf de Kobé : rassurons-nous, dans tout ce bon gras, il reste encore de la bonne viande !',
   'Grâce à son marbré intramusculaire (le gras est distribué dans la viande des muscles et non autour),
   le Wagyu est une viande exceptionnelle, mondialement reconnue pour sa tendreté et sa saveur de beurre.
   La bonne nouvelle : le gras présent dans cette viande est reconnu pauvre en cholestérol, car il présente
   des acides gras essentiels, donc moins de graisses saturées qu’un autre bœuf. Qualifiée de « caviar de la
   viande », cette chair tendre marbrée serait due à une alimentation surveillée, des massages au saké ou à
   la bière , de la musique classique pour ne pas stresser les bêtes … Mythe ou réalité ? Il faut l’avoir
   goûté au moins une fois dans sa vie pour pouvoir en juger !', 'France',12, 4, 7
  ),
  (11,'Veau','Veau','./img', 'Les Veaux proviennent de petites exploitations, ils sont élevés jusqu''à un âge
compris entre 3 et 5 mois avec le lait maternel tété directement au pis de la vache, 2 fois par jour.
Le lait maternel doit représenter au minimum 85% de l’alimentation du veau. Il n’a pas accès à l’auge
et peut recevoir en finition, de façon limitée et dans les conditions strictement définies, un aliment
complémentaire d''allaitement, référencé et contrôlé.', 'La viande de veau de lait est issue des troupeaux
de race à viande. Nous excluons les animaux trop âgés et les veaux maigres. La fibre
doit être souple, la couleur pâle, le gras blanc et le réseau conjonctif peu développé.',
   'Leur alimentation quasiment exclusivement à base de lait leur donne cette viande rosée clair qui comblera
   les amateurs d’escalopes moelleuses ou de côtes à la crème…',
   'La viande de nos veaux se distingue par sa couleur blanche à rosée avec un grain de viande très fin et persillé,
   et un gras blanc satiné et onctueux. Très tendre, sa cuisson révèle tout son fondant et sa saveur.', 'France',12,
   4, 7
  ),
  (12,'Agneau','Agneau','./img', 'Tous les agneaux nés en France sont élevés avec leur mère pendant 4 à 5 semaines
et sont nourris exclusivement de lait. Puis leur alimentation varie selon les régions et les systèmes d''élevage.
On distingue deux grands régimes alimentaires : celui des agneaux d''herbe nourris aux fourrages verts et celui
des agneaux de bergerie nourris de fourrages conservés (foin, paille, maïs ensilé). Leur aliment de complément
est généralement constitué de tourteaux de soja auxquels s''ajoutent des vitamines et des minéraux.', 'Nous sélectionnons
des agneaux jeunes, nourris 3 mois au lait maternel, puis avec une ration
comportant du foin et des céréales. La couleur doit être belle, éclatante, la graisse de couverture modérée,
le gras interstitiel en petite quantité. Pour les gigots, nous préférons en général qu’ils soient issus de
jeunes femelles, dont la viande est plus douce que celle des jeunes mâles non castrés.',
   'La couleur de son gras est tendrement nacrée, celle de sa chair délicatement rosée.',
   'La viande de nos agneaux est d’une grande finesse gustative : goûteuse, soyeuse, raffinée et délicieusement
   fondante.', 'France',12, 4, 7
  ),
  (13,'Porc noir de Bigorre','Porc','./img', 'Les racines du Porc noir de Bigorre remonte à l’époque romaine, il a
failli disparaître avant de revenir à la mode il y peu. Elevé dans son milieu naturel toute l’année avec moins
de 20 porcs à l’hectare il se nourrit d’herbe de châtaignes et de glands.  ', '', '',
   'Sa viande persillée et au goût parfumé de noisette donne à cette viande toutes ses lettres noblesse.
   Un produit rare à découvrir ou redécouvrir.', 'France',12, 4, 7
  ),
  (14,'Saucisson de Lyon','Charcuterie','./img', ' ', '', 'Pièce incontournable de la charcuterie lyonnaise et
française, redécouvrez le Saucisson de Lyon pistaché ',
   '', 'France',12, 4, 7
  ),
  (15,'Le Porc noir de Bigorre - Padouen','Charcuterie','./img', '', '', 'Le porc noir de Bigorre offre une viande
sans pareille, fondante, colorée et savoureuse.
Les rillettes Padouen seront appréciées par les gourmets à la recherche de saveurs aromatiques ',
   'En 1981, alors qu’elle était menacée d’extinction, la race très ancienne du porc Noir de Bigorre a pu être
   sauvegardée grâce à un petit nombre d’éleveurs attachés à la survie de ce fleuron de leur culture.
   C’est au cœur des Pyrénées, en Bigorre, que ces porcs rustiques sont choyés selon un cahier des charges détaillé.
   Elevé minimum 12 mois en plein air, le porc noir de Bigorre se nourrit de glands, de châtaignes, d’herbe et reçoit
   un complément de céréales, de pois et de soja sans organisme génétiquement modifié (OGM).', 'France',12, 4, 7
  ),
  (16,'Boudins','Charcuterie','./img', ' ', '', 'Elaborés dans les règles de l’art, les boudins blancs ou noirs
se dégustent nature ou aux accords audacieux ',
   '', 'France',12, 4, 7
  );

