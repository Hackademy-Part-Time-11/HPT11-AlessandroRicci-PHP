<?php

$corsoHackademy = ["docenti" => ["daniele", "jeremy"], "studenti"=> ["alessandro",], "argomenti"=> ["PHP"]];

echo 'ciao sono '. $corsoHackademy["studenti"][0].' '. 'sto studiando '. $corsoHackademy["argomenti"][0]. ' con '. $corsoHackademy["docenti"][0] ;