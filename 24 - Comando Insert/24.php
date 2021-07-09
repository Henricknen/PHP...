<?php                                                            // Comando Insert

    $vnome = "henrique";
    $vuser = "lhsf";
    $vsenha = "321";
    $vmail = "l.henrick@ive.com";
    $vtel = "3456776";
    $st = 1;
    $vobs = "ok";

    $sql = "INSERT INTO tb_cadastro VALUES (NULL, '$vnome', '$yuser', '$vsenha', '$vmail', '$vtel', $vst, '$vobs')";
    $res = mysqli_query ($con, $sql);
    $num = mysqli_affected_rows($con);
    echo "$num registro inserido";

    mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 24 aula de PHP - Comando Insert</title>
</head>
<body>
    
</body>
</html>