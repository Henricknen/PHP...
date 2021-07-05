<?php

    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");
    $meses = array( "Janeiro", "Fevereiro", "Março", 
"Abril", "Maio", "Junho", "Julho", "Agosto", 
"Setembro", "Outubro", "Novembro","Dezembro");

    echo $dia." de ".$meses[$mes - 1]." de ".$ano;

?>