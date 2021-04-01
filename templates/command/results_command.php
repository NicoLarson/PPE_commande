<?php
ob_start();
$title = "Voici le résultat de votre commande";
?>

<section>
  <h2>Votre commande du <?= $facture->getDate() ?> </h2>
  <h3>Détail de votre commande:</h3>
  <p>Nombre de produit: <?= $facture->totalProduct() ?></p>
  <ul>
    <li><?= $facture->getQttTablettes() ?>: Tablettes</li>
    <li><?= $facture->getQttPc() ?>: PC</li>
    <li><?= $facture->getQttPortables() ?>: Portables</li>
  </ul>
  <p>Le total de votre commande est de : <?= number_format($totalHT, 2, ',', ' ') ?>€</p>
  <p>Le total avec TVA de votre commande est de: <?= number_format($totalTVA, 2, ',', ' ') ?>€</p>
  <p>Adresse: <?= $facture->getAdress() ?></p>
</section>


<?php
$content = ob_get_clean();
require('../templates/base.php');
?>