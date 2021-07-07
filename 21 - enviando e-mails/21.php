<?php                                                               // Enviando e-mails

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
    <form name="email" method="post" action="envia.php">
        <label>e-mail</label>
        <input type="text" name="email_txt"/><br/>
        <label>Assunto</label><br/>
        <input type="text" name="assunto_txt"/><br/>
        <label>Mesnssagem</label><br/>
        <textarea name="msg_txt" rows="5" cols="50"></textarea><br/><br/>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>