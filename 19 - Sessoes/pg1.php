<?php                           // Sessões
    
    session_start();  // sessão é criada quando session_start(), é chamado

    if($_SESSION["vseCapacitando"] == "s")
    {

    $_SESSION["vphp"] = "A pratica leva a perfeição...";
    echo "<h3>Segunda pagina</h3>";

    echo $_SESSION["vnome"];
    echo "<br/>".$_SESSION["vtexto"];
    echo "<br/><hr/>".$_SESSION["vphp"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19 aula de PHP - Sessões</title>
</head>
<body>

    <br/><br/>
    <a href = "19.php" target = "_self">Voltar p/ 19.php</a><br/>
    <a href = "pg2.php" target = "_self">Terceira pagina</a>
    
</body>
</html>

<?php

    }
    else
    {
        echo "Acesso indevido...";
    }

?>