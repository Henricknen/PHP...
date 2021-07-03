<?php                                                               //Loop do/whie

    $i = 6;                             // caso $i seja maior que $tam no "do" executa pelo menos uma vez
    $tam = 5;

    echo "Loop Do While<br/>";
    do
    {
        echo "<pre>Variavel i tem o Valor. .: $i<br/>";
        echo "Variavel tam tem o valor: $tam </pre><br/>";
        $i++;
    } 
    while($i < $tam);
    {
        echo "<br/><hr/></br/>";

        echo "Loop While<br/>";
        $i = 8;                     // ja no "while" se $i For maior que $tam não sera executado nenhuma vez
        $tam = 7;
        while($i < $tam)
        {
            echo "<pre>Variavel i tem o Valor. .: $i<br/>";
            echo "Variavel tam tem o valor: $tam </pre><br/>";
            $i++;
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8 aula de PHP - Lopp do While</title>
</head>
<body>
    
</body>
</html>