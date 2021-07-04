<?php                                                               //Funções
    function aula ()
    {
        echo "<br/>Ola, mundo<br/>";
        echo "Aula sbre funções<hr/>";       // Sem parametro e se retorno
    }

    aula();
    aula();
    aula();

    function soma($n1, $n2)                 // Com parametro e sem retorno
    {
        $res = $n1 + $n2;
        echo "<br/>Soma de $n1 com $n2 = $res<br/>";
    }

    soma(5,20);

    function soma2($n1, $n2)                // Com parametro e com retorno
    {
        $res = $n1 + $n2;
        return $res;
    }

    $so = soma2(10, 5);
    echo "<br/>resultado = $so<br/>";

    $valores = array(2, 8, 10, 3,8, 5);
    function media($val)
    {
        $tam = count($val);
        $soma = 0;
        for($i=0; $i < $tam; $i++)
        {
            $soma += $val[$i];
        }
        return $soma / $tam;
    }
    $med = media($valores);
    echo "<br/>Media = $med<br/>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12 aula de PHP - FUNÇÕES</title>
</head>
<body>
    
</body>
</html>