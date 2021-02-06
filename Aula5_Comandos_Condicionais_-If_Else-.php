<!DOCTYPE html>
<?php
    echo "<h1> Aula 5 - Comandos Condicionais If Else </h1>";
    
$nota=40;
    
echo "<h2> Condicional Simples </h2>";

if($nota >= 70){
    echo "<font color=geen>Aprovado</font>";
}else if($nota >= 50){
    echo "<font color=yellow>Recuperação</font>";
}else{
    echo "<font color=red>Reprovado</font>";
}

    echo "<hr/>";

if(($nota >= 40)&($nota <=60)){
    echo "Aluno Selecionado";
}else{
    echo "Aluno Fora da Faixa";
}


?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 5 - Comandos Condicionais If Else </title>
        <style>
            p {
                color: #ff0000;
                margin-top: 5px;
                margin-bottom: 5px;
            }           
        </style>
        <title></title>
    </head>
    <body>
        
    </body>
</html>

