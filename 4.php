<?php

    function operationIdentificator($n) {
        $n > 0 ? print "\n $n é positivo (P). \n" : print "\n $n é negativo ou igual a zero (N). \n";
    }

    print "\nInsira um número: ";
        $n = (float) fgets(STDIN);
            
    operationIdentificator($n);

?>