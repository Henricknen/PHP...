<?php                                                               //while

    $i = 0;
    $tam = 10;
    $vet = array ($tam);

    while($i < 10)
    {
        echo "Valor da variavel i: $i<br/>";
        $i++;
    }
    echo "<br/><hr/><br/>";

    $i = 0;
    while($i < $tam)
    {
        $vet[$i] = $i;
        $i++;
    }

    $i = 0;
    while($i < $tam)
    {
        echo "$vet[$i]<br/>";
        $i++;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 aula de PHP - Loop While</title>
</head>
<body>
    
</body>
</html>