<?php                                                            // Isset
                                             //Função boleana retorna o valor True ou False

    if(isset($_POST["f_nome"]))
    {
        $vnome = $_POST["f_nome"];
        echo "Nome:  $vnome<br/>";
    }
    else
    {
        echo "Dados não submetidos...";
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17 aula de PHP - Função Isset</title>
</head>
<body>
    <br/><br/>
    <form name="f_aula" method="post" action="17.php">
        <input type="text" name="f_nome"/><br/>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>

<?php

    }           // Quando o isset apresentar "$nome" o formuario não será mais apresentado na tela, pois ele esta dentro do else...

?>