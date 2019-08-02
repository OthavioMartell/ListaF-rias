<?php

    function Soma(){
        $soma = 0;
            for ($contador = 1; $contador <= 3; $contador++){ 
                print "\nDigite o $contador º número: ";
                    $n = (float) fgets(STDIN);
                    $soma += $n;
            }
                return $soma;
        }

    print "\nO resultado final é igual a: " . $valorF = Soma() . "!\n";

?>