<?php

    function Sequencia($n){
        for ($contador = 1; $contador <= $n; $contador++){
            for ($nContador = 1; $nContador <= $contador; $nContador++){ 
                print $contador . " ";
            }
            $nContador = 1;
            print "\n";
        }
    }

        print "\nInsira o número limite para a contagem regressiva e repetitiva (inteiro): ";
            $n = (int) fgets(STDIN);
            
        print "\n";

            Sequencia($n);

        print "\n";

?>