<?php                                                          //Vetores e Arrays

    $vet = array(7);
    $vet2 = array("nome" => "l.henrique","cidade" => "martinopolis","curso" => "PHP" );

    $mat = array(
        array("Carro1", 100000),
        array("Carro2", 150000),
        array("Carro3", 250000)
    );

    $i = 6;

    echo "O ".$mat[0][0]. " tem o de Valor: ". $mat[0][1]."<br/>";
    echo "O ".$mat[1][0]. " tem o de Valor: ". $mat[1][1]."<br/>";
    echo "O ".$mat[2][0]. " tem o de Valor: ". $mat[2][1]."<br/>";



    $vet[0] = "Carro";
    $vet[1] = "Avião";
    $vet[2] = "Navio";
    $vet[3] = "Moto";
    $vet[4] = "Onibus";
    $vet[5] = 123456;
    $vet[6] = $vet2 ["nome"];

    echo "Elemento no indice $i = ".$vet[$i]."<br/>";
    echo "Nome: ".$vet2["nome"]." - Cidade: ".$vet2["cidade"]." - Curso: ".$vet2["curso"]."<br/>";


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 aula de PHP Vetores / Arrays</title>
</head>
<body>
    
</body>
</html>