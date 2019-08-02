<?php
    
    function Inverso($ng){
        $qnt = strrev($n);
            return $qnt;
    }

    print "\nDigite um número qualquer, que deseja inverter: ";
        $n = (float) trim(fgets(STDIN));
        
    print "\n" . Inverso($n) . "\n";

?>


