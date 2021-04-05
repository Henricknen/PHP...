<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apllicando 10% de aumento</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$: " . number_format ($preco, 2);
        $preco += $preco * 10/100;
        echo "<br/> O novo preço com 10% e aumento será R$: ". number_format ($preco, 2);
    ?>
</body>
</html>