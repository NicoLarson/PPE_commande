<?php
class Form
{
    public $warningMessage;


    public function __construct($tabletteQtt, $pcQtt, $portableQtt, $adresse)
    {
        $this->tabletteQtt = $tabletteQtt;
        $this->pcQtt = $pcQtt;
        $this->portableQtt = $portableQtt;
        $this->adresse = $adresse;
    }

    public function formIsValid()
    {
        if ($this->tabletteQtt == "" && $this->pcQtt == "" && $this->portableQtt == "" && $this->adresse == "") {
            $this->warningMessage = '<p class="warning"> Veuillez remplir tous les champs</p>';
            return false;
        } elseif ($this->tabletteQtt < 0  || $this->pcQtt < 0 || $this->portableQtt  < 0) {
            $this->warningMessage = '<p class="warning">Veuillez vérifier quantités saisis.</p>';
            return false;
        } elseif ($this->tabletteQtt > 10 || $this->pcQtt > 10 || $this->portableQtt  > 10) {
            $this->warningMessage = '<p class="warning">Vous ne pouvez pas commander plus de 10 unités par produits.</p>';
            return false;
        } elseif ($this->tabletteQtt == 0 && $this->pcQtt == 0 && $this->portableQtt  == 0) {
            $this->warningMessage = '<p class="warning"> Veuillez commandez au moins un produit.</p>';
            return false;
        } else {
            return true;
        }
    }

    public function getWarningMessage()
    {
        $this->formIsValid();
        return $this->warningMessage;
    }
}
