<?php                                                            // Sessões
    
    session_start();
    $_SESSION["vnome"] = "Luis Henrique S F<br/>";
    $_SESSION["vtexto"] = "<hr/>Aula 19";
    $_SESSION["vseCapacitando"] = "s";

    

    //unset ($_SESSION["vnome"]);  // "unset" - apaga variaveis

    echo $_SESSION["vnome"];
    echo "<br/>".$_SESSION["vtexto"];
    if(isset($_SESSION["vphp"]))
    {
        echo "<br/><hr/>".$_SESSION["vphp"];
    }
    else
    {
        echo "Variavel não definida...";
    }

    //session_destroy();  // destroi a sessão


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
    <a href = "pg1.php" target = "_self">Segunda pagina</a>
</body>
</html>