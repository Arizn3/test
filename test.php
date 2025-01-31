<?php

    $Price = readline("Inserez le montant :300") ;
    $Solde = readline("Solde :200") ;
        if ($Price>$Solde) {
            echo"Transaction refusez\n";
        }
        else {
            echo"Transaction validez\n";
        } 
?>