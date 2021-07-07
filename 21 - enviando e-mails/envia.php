<?php

    $vmail = $_POST ["email_txt"];
    $vassunto = $_POST ["assunto_txt"];
    $vmsg = $_POST ["msg_txt"];

    if(mail ($vmail, $vassunto, $vmsg, "Replay-To:resp_l.henrique@live.com"))  //Email que recebera a resposta, Cc, Bcc, Coments, Contenr-Type
    {
        echo "Menssagem enviada...<br/>";
        echo "<a href = 21.php target = _self<Voltar</a>";
    }
    else
    {
        echo "Error, tente novamente..";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21 aula de PHP - Enviando e-mails</title>
</head>
<body>
    
</body>
</html>