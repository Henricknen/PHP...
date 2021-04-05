<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolecente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
print_r($categorias);

$nome = 'Eduardo';
$idade = 28;

var_dump($nome);
var_dump($idade);

if($idade >= 6 && $idade<= 12)
{
    echo 'Infantil';
}
else if($idade >= 13 && $idade <= 18)
{
    echo 'Adolecente';  
}
else
{
    echo 'Adulto';
}