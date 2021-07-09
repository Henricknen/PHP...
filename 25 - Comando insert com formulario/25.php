<?php                                                     // MySQL - Comando Inset com formulario

    include "conexao.php";

    $vcod = $_POST["F_Cod"];
    $vprod = $_POST["F_Prod"];
    $vpreco = $_POST["F_Preco"];
    $vqtde = $_POST["F_Qtde"];

    $sql = "INSERT INTO tb_produtos VALUES ('$vcod', '$vprod', $vpreco, $vqtde)";  // Insere no Banco de Dados
    $res = mysqli_query ($con, $sql);                       // faz gravação no Banco de dados
    $linhas = mysqli_affected_rows($con);

    if($linhas == 1)
    {
        echo "Registro gravado com sucesso...<br/>";
    }
    else
    {
        echo "Falha na gravação do Registro...";
    }

    mysqli_close ($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25 aula de PHP - Comando Inset com formulario</title>
</head>
<body>

    <br/>
    <a heref = "form.html">Voltar</a>
</body>
</html>
