<?php

    function valorPagamento($valor, $atraso){
        if ($atraso > 0){
            $taxa = (((($valor * 0.03) + ($atraso * 0.001)) / 100) * $valor);
            $valorF = $valor + $taxa;
                return $valorF;
        }else{
            $valorF = $valor;
                return $valorF;
        }
    }

            print "\nDigite o valor da prestação: ";
                $valor = (float) fgets(STDIN);

            print "\nHá quantos dias a data de vencimento do pagamento venceu? (Se o pagamento ainda não passou da data de vencimento, insira o valor '0') ";
                $atraso = (int) fgets(STDIN);

            print "\nO valor total a ser pago é de R$" . paymentCalc($valor, $atraso) . "!\n";

?>