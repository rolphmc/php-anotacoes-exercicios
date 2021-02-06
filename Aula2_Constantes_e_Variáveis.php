<!DOCTYPE html>
<?php

    //VARIÁVEIS
    $vnome1="Rodolfo";
    $vnome2="";
    $vnome3="";
    $vnum=10;
    $vnum2=20.5;
    $soma=0;
    
    echo "Nome: $vnome1 <br/>";
    $vnome2="Mota";
    echo "Segundo Nome: $vnome2 <br/>";
    $vnome3="Carvalho";
    echo "Sobrenome: $vnome3 <br/>";
    
    echo "Nome completo: $vnome1 $vnome2 de $vnome3 <br/>";
    
    $soma=10+20;
    echo "Resutado de 10+20: $soma <br/>";
    
    //CONSTANTES
    define("cNome","Const Rodolfo");
    define("ver",PHP_VERSION);
    define("dir",__DIR__);
    
    echo "<hr/>";
    echo "Constante cNome: ".cNome."<br/>";
    
    echo "Caminho Completo dessa pasta: ".__FILE__."<br/>";
    echo "Versão do PHP: ".ver."<br/>";
    echo "Caminho até está pasta: ".dir."<br/>";
    echo "versão do SO: ".PHP_OS."<br/>";
    echo "Número dessa Linha no Código: ".__LINE__."<br/>";
?>

<html>
<head>
        <meta charset ="UTF-8"/>
	<title> Aula 2 - Constantes e Variáveis </title>
        <style>
                
                        
        </style>
</head>
<body>

</body>
</html>