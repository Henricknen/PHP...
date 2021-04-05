<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atribuição de variaveiss</title>
</head>
<body>
    <?php
        $x = "LHSF";
        $$x = " 2021";
        echo "O conteudo da variavel X é $x";
        echo "<BR/> esta variavel recebeu o ano de $LHSF";
    ?>
</body>
</html>