<?php                                                            //switch case
    $opc = 2; //1:Carro, 2:Moto, 3:Bicicleta, 4:Navio, 5:Avião

    switch ($opc)
    {
        case 1:
            echo "Carro";
            break;
        case 2:
            echo "Moto";
            break;
        case 3:
            echo "Bicicleta";
            break;
        case 4:
            echo "Navio";
            break;
        case 5:
            echo "Avião";
            break;
        default;
            echo "Transpote invalido";
            break;

    }
    echo "<hr/>";

    switch ($opc)
    {
        case ($opc <= 3 and $opc > 0);
            echo "Transporte terrestre";
            break;
        case 4:
            echo "Transporte maritimo";
            break;
        case 5:
            echo "Transporte aereo";
            break;
    
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 aula de PHP - switch case</title>
</head>
<body>
    
</body>
</html>