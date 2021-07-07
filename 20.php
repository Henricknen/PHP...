<?php                                                             //Herança

    class aula21
    {   // private e Protecd
        protected  $var1 = "A persistencia é o caminho do exito...";
        protected $var2 = "Até qui ja codei 21 aulas...";
        protected $var3 = "Breve novas codificações...";

        function escreve()
        {
            echo "<br/>Metodo da classe aula21<br/>";
            echo "<br/>".$this->var1;
            echo "<br/>".$this->var2;
            echo "<br/>".$this->var3;
        }
    }
        // Herança
    class foco extends aula21
    {
        
        var $vc1 = "Codificando em PHP";
        var $vc2 = "Luis Henrique S F";

        function escreve2()
        {
            echo "<br/>Metodo da classe foco<br/>";
            echo "<br/>".$this->vc1;
            echo "<br/>".$this->vc2;
            echo "<br/>".$this->var1;
            echo "<br/>".$this->var2;
            echo "<br/>".$this->var3;

        }
    }

    $aulaOBJ = new aula21();
    $focoOBJ = new foco();

    $aulaOBJ->escreve();
    echo "<br/><hr/>";
    //$focoOBJ->escreve();
    echo "<br/><hr/>";
    $focoOBJ->escreve2();
    echo "<br/><hr/>";
    //echo "<br/>".$this->var1;
    //echo "<br/>".$this->var2;
    //echo "<br/>".$this->var3;
   
   


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21 aulda de PHP - Classes parte 2 Herança </title>
</head>
<body>
    
</body>
</html>