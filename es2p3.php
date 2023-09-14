<?php

for ($i=0; $i <101 ; $i++) { 
    if ($i %3 == 0 && $i %5 == 0) {
        echo 'HACKADEMY'. "\n";
    } elseif ($i %5 == 0) {
        echo 'JAVASCRIPT'. "\n";
    }elseif ($i %3 == 0 ) {
        echo 'php'. "\n";
    }else {
        echo $i . "\n";
    }
}