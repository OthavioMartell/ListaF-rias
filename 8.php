<?php

    function Digitos($n){
        $digitos = strlen($n);
            return $digitos;
    }

    print "\nDigite um número qualquer, que deseja encontrar a quantidade de caracteres nele, contidos: ";
        $n = (float) trim(fgets(STDIN));

    print "\nNo texto inserido há um total de " . Digitos($n) . "caracteres!\n";
?>