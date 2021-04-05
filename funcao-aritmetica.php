<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções aritmeticas</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>valores recebidos $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ". abs($v2); 
        echo "<br>O valor de $v1 <sup>$v2</sup > é ". pow($v1, $v2);
         

    ?>
</body>
</html>