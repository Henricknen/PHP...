<?php                                                   // Passagem de valores pela url

    $texto = "Passagem de valores pela URL";
    $nome = "Luis henrique S F";
    $aula = "aula 18";
                                                       // urlencode - usar quando for faze pasagem de cacteres com espaços
    echo "<a href = pg1.php?tx=".urlencode($texto)."&no=".urlencode($nome)."&au=". urlencode($aula)." target = _self> Abre pg1</a>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18 aula de PHP - Passagem de valores pela url</title>
</head>
<body>
    
</body>
</html>