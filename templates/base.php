<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Le sujet de ce PPE concerne la réalisation d’une commande en ligne. Dans ce PPE l’interface graphique avec la première page est déjà fournie. 
Le travail consiste à vérifier par php que les champs de saisi soient renseignés ou sinon signaler à l’utilisateur par un warning que les champs sont obligatoires. 
Il faudra remplacer les attributs required html par un contrôle php. 
Vérifier que la page comporte une certaine accessibilité pour les lecteurs d’écrans: inspecteur dans le navigateur, onglet «Accessibilité».">
  <title>Technos Prod</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <h1>Technos Prod</h1>
    <h2><?= $title ?></h2>
  </header>
  <main>
   <?= $content ?>
  </main>
</body>

</html>