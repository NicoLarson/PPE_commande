<?php

class Command
{
    
   public function __construct($qttTablettes, $qttPc, $qttPortables, $adress)
    {
        $this->date = date("j/m/Y, H:i");
        $this->qttTablettes = $qttTablettes;
        $this->qttPc = $qttPc;
        $this->qttPortables = $qttPortables;
        $this->adress = $adress;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getQttTablettes()
    {
        return $this->qttTablettes;
    }
    public function getQttPc()
    {
        return $this->qttPc;
    }
    public function getQttPortables()
    {
        return $this->qttPortables;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function totalProduct()
    {
        return $this->qttTablettes +  $this->qttPc + $this->qttPortables;
    }

    public function totalTVA($priceTablettes, $pricePC, $pricePortable)
    {
        return $this->totalHT($priceTablettes, $pricePC, $pricePortable) * (1 + 19.6 / 100); //(1+19.6/100)
    }

    public function totalHT($priceTablettes, $pricePC, $pricePortable)
    {
        return $this->qttTablettes * $priceTablettes +  $this->qttPc * $pricePC + $this->qttPortables * $pricePortable;
    }
}

