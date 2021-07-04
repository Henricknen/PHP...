<?php                                                    // Manipulação de data e hora

    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");

    $meses = array( "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro","Dezembro");

    $hora = date("h");  // h: 12 horas - H: 24 horas
    $minuto = date("i");
    $segundo = date("s");

    echo $dia." de ".$meses[$mes - 1]." de ".$ano."<br/>";
    echo $hora.":".$minuto.":".$segundo;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15 aula de PHP - Manipulação de data e hora</title>
</head>
<body>
    
</body>
</html>