<?php

//scrivere una funzione che consenta di verificare l'idoneità di una password secondo alcuni criteri

//lunghezza di almeno 8 caratteri
//contenga almeno un carattere maiuscolo 
//contenga almeno un carattere speciale 
//contenga almeno un numero

$password = readline("Inserisci una password sicura: ");

function controlloPassword(string $password){

        if(checkUpper($password)){
            echo "maiuscole          CHECK\n";
        };
        if ( checkLength($password)) {
            echo "lunga              CHECK\n";
        };
        if(checkSpecial($password)){
            echo "caratteri speciali CHECK\n";
        };
        if(checkNumber($password)){
            echo "Numeri             CHECK\n";
        };

        if(!checkUpper($password)){
            echo "NON hai almeno una maiuscola\n";
        }
        if(!checkSpecial($password)){
            echo "NON ci sono caratteri speciali\n";
        }
        if(!checkLength($password)){
            echo "NON La password è troppo lunga\n";
        }
        if(!checkNumber($password)){
            echo "NON ha numeri\n";
        }

}

function checkUpper($password){
    $mauiscole = ctype_upper($password);
    $check=false;
    for ($i=0; $i < strlen($password); $i++) { 
        if (ctype_upper($password[$i])) {
            $check=true;
        }
    }
    return $check;
}

function checkLength($password){
    $check = false;
    if (strlen($password) < 8) {
        $check = true ;
    }
    return $check;
}

function checkSpecial($password){
    $specialChars = ['@','!','#','&','$'];
    $check = false;
    for($i=0;$i<strlen($password);$i++){
        if(in_array($password[$i],$specialChars)){
            $check = true;
        }
    }
    return $check;
}

function checkNumber($password){
    $Numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $check = false;
    for($i=0;$i<strlen($password);$i++){
        if(in_array($password[$i],$Numeri)){
            $check = true;
        }
    }
    return $check;
}

controlloPassword($password);