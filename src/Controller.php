<?php

require 'Products.php';
require 'Command.php';
require 'Form.php';

$formulaire = new Form($_POST['tablettes'], $_POST['pc'], $_POST['portable'], htmlspecialchars($_POST['adresse']));

function resultat_commande()
{
    $tablette = new Products("Tablettes", 350);
    $pc = new Products("PC", 784.99);
    $portable = new Products("Portables", 319.99);
    $facture = new Command($_POST['tablettes'], $_POST['pc'], $_POST['portable'], htmlspecialchars($_POST['adresse']));
    $totalTVA = $facture->totalTVA($tablette->price, $pc->price, $portable->price);
    $totalHT = $facture->totalHT($tablette->price, $pc->price, $portable->price);
    require './view/resultat_commande.php';
}

function validation_commande()
{
    $formulaire = new Form($_POST['tablettes'], $_POST['pc'], $_POST['portable'], $_POST['adresse']);
    require './view/validation_commande.php';
}

