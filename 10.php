<?php   //  Loop FOREACH

    $transp = array("Carro", "Moto", "Bicicleta", "Onibus", "Avião");

    foreach($transp as $veiculo)
    {
        echo "$veiculo<br/>";
        /*
        if($veiculo == "Bicicleta")
        {
            break;
        } */
    }
    echo "<hr/>";
    foreach ($transp as $veiculo)
    {
        if($veiculo == "Bicicleta")
        {
            echo "Bicicleta esta na lista de veiculos<br/>";
            break;
        }

        if($veiculo == "Avião")
            echo "Avião esta na lista de veiculos<br/>";

        if($veiculo == "trem")
            echo "Trem esta na na lista de veiculo<br/>";

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 aula de PHP - loop FOREACH</title>
</head>
<body>
    
</body>
</html>