<?php

require './src/Controller.php';

if (isset($_POST['tablettes'])) {
    if ($formulaire->formIsValid()) {
        resultat_commande();
    } else {
        validation_commande();
    }
} else {
    validation_commande();
}
