<?php
    
    function hora($hora, $minuto){
        if ($hora >= 13 && $hora <= 23){
            $newHora = $hora - 12;
            $msg = "\n $hora : $minuto é igual a $newHora : $minuto P.M.\n";
        }elseif ($hora == 00 || $hora == 0){
            $newHora = $hora + 12;
            $msg = "\n $hora : $minuto é igual a $newHora : $minuto  P.M.\n";
        }elseif ($hora == 12){
            $msg = "\n $hora : $minuto é igual a $hora : $minuto A.M.\n";
        }else{
            $msg = "\n $hora : $minuto é igual a $hora : $minuto A.M.\n";
        }
            return $msg;
    }
        do {
            print "\nInsira apenas a hora que está marcando no relógio no formato de 24 horas: ";
                $hora = (int) fgets(STDIN);

        print "\nInsira apenas os minutos que estão sendo mostrados no relógio no formato de 24 horas: ";
            $minuto = (int) fgets(STDIN);
            $msg = hora($hora, $minuto);
                echo $msg;
                    print "\nDeseja converter o formato de horário novamente [S/N]?: ";
                        $resposta = (string) fgetc(STDIN);
        }while ($resposta == "S" || $resposta == "s");
            
            print "\nObrigado, até a próxima!\n";

?>