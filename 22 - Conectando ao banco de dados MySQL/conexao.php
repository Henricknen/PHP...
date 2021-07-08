<?php                                                   // Conectando ao banco de dados MySQL

    $con = mysqli_connect ("localhost", "root", "");  // Este comandos seleciona a tabela "tb_cadastro" do Banco de Dados
    mysqli_select_db ($con, "tb_cadastro");

?>
