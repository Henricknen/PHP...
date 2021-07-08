<?php                                                            // Executando comando MySQL

    include("conexao.php");

    $res = mysqli_query ($con, "SELECT * FROM tb_cadastro");
    $linhas = mysqli_num_rows ($res); // Este comando informa o numero de linhas da consulta
    echo "Encontrados $linhas registros na tabela tb_cadastro";     //Este comando informa quantos resgistro foram encontrado
    
    mysqli_close ($con); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 23 aula de PHP - Executando comando MySQL</title>
</head>
<body>
    
</body>
</html>