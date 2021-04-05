<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolecente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 31;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade<= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Infantil')
            echo "O nadador ",$nome, " compete  na categoria infantil";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Adolecente')
            echo "O nadador ",$nome, " compete  na categoria Adolecente";
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Adulto')
            echo "O nadador ",$nome, " compete  na categoria Adulto";
    }
}