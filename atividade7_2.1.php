<?php
$nota = 0;
if ($nota<20)
    {
        echo 'Aluno <span style"color:#ff0000">Reprovado</span> com ' .$nota. ' valores';
        echo '<br>Muito bom trabalho';
switch (true){
case ($nota>=10 && $nota<=20):
            echo 'Aluno <span style="color:#00ff00">APROVADO<span> com ' .$nota. ' valores.';
            echo '<br> Muito bom trabalho';
                      
break;
case ($nota>20 || $nota<0);
    echo '"Valores da nota nao é valida"';
    break;
}
    
}

?>