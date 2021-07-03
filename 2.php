<?php                                                       // Contantes e variaveis

    $vnome = "Luis";  // variavel, pode se alterar
    $vnum = 10;  // variavel
    $vnum2 = 25.7;// variavel
    $vsoma = 0;

    define("cnome", "L.Henrique");  //Contantes, não se altera ao longo do programa
    define("ver", PHP_VERSION);



    echo "Nome: $vnome<br/>";
    $vnome = "Henrique";
    echo "Nome: $vnome<br/>";
    $vnome = "Luis";
    echo "Nome: ".$vnome."<br/>";
    $vsoma = 10 + 25.7;
    echo "Soma: $vsoma<br/>";
    
    echo "Contante cnome ".cnome."<br/>";
    echo"Nome do arquivo". __FILE__."<BR/>";
    echo "Versão do PHP: ".ver."<br/>";

    echo "Versõ do OS.".PHP_OS."<br/>";
    echo "Numero da linha".__LINE__."<br/>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 aula de PHP - Constantes e variaveis</title>
</head>
<body>
   
</body>
</html>