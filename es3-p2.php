<?php

class Contatore {
    public static $valore = 0;
    
    public static function azzera () {
        self::$valore = 0;
    }
}

echo "Valore corrente: " . Contatore::$valore . "\n";

Contatore::$valore = 10;
echo "Nuovo valore: " . Contatore::$valore . "\n";

Contatore::azzera();
echo "Valore dopo l'azzeramento: " . Contatore::$valore . "\n";