<?php
    
    function somaImposto($porcentagem, $valor){
        $tax = $porcentagem / 100;
        $add = $valor * $tax;
        $valorF = $add + $valor;
            
            return $valorF;
    }

        print "\nDigite o valor inicial do produto: ";
            $custo = (float) fgets(STDIN);
        
        print "\nDigite a quantia de imposto, em porcentagem: ";
            $tax = (float) fgets(STDIN);
            
        print "\nO valor final do produto será igual a R$" . $valorF = somaImposto($tax, $custo) . "!\n";

?>