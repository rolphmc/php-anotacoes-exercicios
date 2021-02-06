<!DOCTYPE html>
<?php
    echo "<h1>Aula 9 - Loop FOR (Para)</h1>";
    echo "<p> </p>";

    $i=0;
    $tam=5;
    $vet=array($tam);
    
    echo "<h2>For Simples:</h2>";
    for ($i=0;$i < $tam;$i++){
        echo "Valor de i: $i <br/>";
    }
    
    echo "<h2>Linha feita com comando For:</h2>";
    for($i=0; $i < 100; $i++){
        echo "-";
    }
    echo "<br/><br/>";

    echo "<h2>For com Vetor:</h2>";
    for($i=0; $i < $tam; $i++){
        $vet[$i]=$i*2 ." Cont";
    }
    
    for ($i=0;$i < $tam;$i++){
        echo "Valor da Posição $i é $vet[$i]<br/>";
    }
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 9  - Loop FOR (Para) </title>
        <style>
            p {
                color: #ff0000;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            hr {
                margin: 15px;
            }
        </style>
        <title></title>
    </head>
    <body>
        
    </body>
</html>
