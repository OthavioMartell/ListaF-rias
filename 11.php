<?php

    function mesPorExtenso($dia, $mes, $ano){
        switch ($mes){
            case '01':
                $exteç = "Janeiro";               
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;
            
            case '02':
                $exteç = "Fevereiro";                
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '03':
                $exteç = "Março";            
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '04':
                $exteç = "Abril";            
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '05':
                $exteç = "Maio";          
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '06':
                $exteç = "Junho";            
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '07':
                $exteç = "Julho";
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '08':
                $exteç = "Agosto";
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '09':
                $exteç = "Setembro";
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '10':
                $exteç = "Outubro";
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '11':
                $exteç = "Novembro";
                $rFinal = "\n$dia de $exteç de $ano";
                    return $rFinal;
            break;

            case '12':
                $exteç = "Dezembro";
                $rFinal = "$dia de $exteç de $ano";
                    return $rFinal;
            break;
    
            default:
                exit("\nFormato de data inválido, utilize um número entre 1 e 12!\n");
            break;
        }
    }

        print "Digite a DIA - no formato numérico: ";
            $dia = (int) trim(fgets(STDIN));
            $dia < 01 || $dia > 31 ? exit("\nFormato de data inválido, utilize um número entre 1 e 31!\n") : $dia = $dia;

        print "Digite o MÊS  - no formato numérico: ";
            $mes = (int) trim(fgets(STDIN));
            $mes < 01 || $mes > 12 ? exit("\nFormato de data inválido, utilize um número entre 1 e 12!\n") : $mes = $mes;

        print "Digite o ANO  - no formato numérico: ";
            $ano = (int) trim(fgets(STDIN));
            $mes < 0 ? exit("\nFormato de data inválido!\n") : $ano = $ano;
            $rFinal = mesPorExtenso($dia, $mes, $ano);

        print "\nO formato de $dia/$mes/$ano equivale a $rFinal !\n";

?>