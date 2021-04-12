<?php

require 'Entity/Products.php';
require 'Entity/Command.php';
require 'Form/Form.php';

$formulaire = new Form($_POST['tablettes'], $_POST['pc'], $_POST['portable'], htmlspecialchars($_POST['adresse']));

function resultat_commande()
{
    $tablette = new Products("Tablettes", 350);
    $pc = new Products("PC", 784.99);
    $portable = new Products("Portables", 319.99);
    
    $facture = new Command($_POST['tablettes'], $_POST['pc'], $_POST['portable'], htmlspecialchars($_POST['adresse']));
    $totalTVA = $facture->totalTVA($tablette->price, $pc->price, $portable->price);
    $totalHT = $facture->totalHT($tablette->price, $pc->price, $portable->price);
    require '../templates/command/results_command.php';
}

function validation_commande()
{
    $formulaire = new Form($_POST['tablettes'], $_POST['pc'], $_POST['portable'], $_POST['adresse']);
    require '../templates/command/validation_command.php';
}

