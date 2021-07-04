<?php                                                                       //Break

    $vet = array("mouse","teclado","monitor","memoria","sair","microfone","impressora");
    $tam = count($vet);
    $i = 0;

    echo "Loop While<br/>";
    $i = 0;
    while($i < $tam)
    {
        echo "$vet[$i]<br/>";
        $i++;
        if($vet[$i] == "sair")
        {
            break;
        }
    }


    echo "<br/><hr/><br/>";
    echo "Loop Do While<br/>";
    $i = 0;
    do
    {
        echo "$vet[$i]<br/>";
        $i++;
        if($vet[$i] == "sair")
        {
            break;
        }
    }while ($i < $tam);

    echo "<br/><hr/><br/>";
    echo "Loop For<br/>";
    for($i=0; $i < $tam; $i++)
    {
        if($vet[$i] == "sair")
        {
            break;
        }
        echo "$vet[$i]<br/>";
    }

    echo "<br/><hr/><br/>";
    echo "Loop Foreach<br/>";
    foreach($vet as $pc)
    {
        if($pc == "sair")
        {
            break;
        }
        echo "$pc<br/>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>