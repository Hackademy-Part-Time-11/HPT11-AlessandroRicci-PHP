<?php

class company{
    public static $averege_wage=1500;
    public $name ;
    public $location;
    public $NDipendenti;
    public static $totNAziende=0;

    public function __construct($nome, $luogo, $dipendenti,) {
        $this->name = $nome;
        $this->location = $luogo;
        $this->NDipendenti = $dipendenti;
        $this->stampa1();
        $this->mediaSpesa();
        self::$totNAziende++;
        //costo totale medio di aziende
        //aggiunge il costo totale annuo dell'azienda aggiunta
    }

    public function stampa1(){
        if ($this->NDipendenti > 0) {
            echo "l'azienda " . $this->name . "con sede in " . $this->location . " ha ben ". $this->NDipendenti. "\n";
        } else {
            echo "l'azienda " . $this->name . "con sede in " . $this->location . " non ha dipendenti ". "\n";
        }
    }

    public function mediaSpesa(){
        $Spesa = $this->NDipendenti * (self::$averege_wage * 12) ;
        echo "la media è di: ". $Spesa. "\n";
    }

    public function totSpesaAziende(){
        $totSpesa = ()/ self::$totNAziende;
    }
}

$Azienda1 = new company("Aulab", "Italia", 50);

$Azienda2 = new company("Acqua Lete", "Italia", 250);

$Azienda3 = new company("Levissima", "Londra", 30);

$Azienda4 = new company("Feltrinelli", "Marocco", 150);

$Azienda5 = new company("Domenicana", "Tunisia", 0);





