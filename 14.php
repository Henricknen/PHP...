<?php

    function recurs($num)
    {
        if($num != 0)
        {
            echo "a função apresenta o valor $num<br/>";
            recurs($num - 1);
        }
    }

    recurs(10);

    echo "<br/><hr/><br/>";
// 4! = 4x3x2x1 = 24
    function fat($num) // fatorial
    {
        if($num < 0)
        {
            return -1;
        }
        if($num <=1)
        {
            return 1;
        }
        return $num * fat($num - 1);
    }

    echo "Fatorial de 10: ".fat(10);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14 aula de PHP - funções recursivas</title>
</head>
<body>
    
</body>
</html>