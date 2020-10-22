<?php
    $diaSemana = 5;
    switch ($diaSemana){
        case 1:
            print ('Domingo');
            break;
        case 2:
            print ('Segunda-feira'); 
            break;
        case 3:
            print ('Terça-feira');
            break;
        case 4:
            print('quarta-feira');
            break;
        case 5:
            print ('quinta-feira');
            break;
        case 6:
            print ('Sexta-feira');
            break;
        case 7:
            print ('Sabado');
            break;
                   default:
                   echo 'Erro ao avaliar o dia da semana';         
    }
    ?>