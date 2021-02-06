<!DOCTYPE html>
<?php
    date_default_timezone_set('America/Sao_Paulo');

    echo "<h1> Aula 15  - Manipulação de Data e Hora </h1>";
    echo "<p>  </p><br/>";
    
    $dia= date("d");
    $mes= date("m");
    $ano= date("Y");
    $meses=array('janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro');
    $hora= date("H");
    $minuto= date("i");
    $segundo= date("s");
    
    echo "<h2>Exibição simples de Data</h2>";
    echo "<hr/>$dia de ".$meses[$mes-1]." de $ano <hr/>";
    
    echo "<h2>Exibição simples de Hora</h2>";
    echo "<hr/>$hora:$minuto:$segundo<hr/>";
    echo "<p>  <p>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 15  - Manipulação de Data e Hora </title>
        <style>
            p,h3 {
                color: #ff0000;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            p#identacao {
                color: #ff0000;
                margin-left: 30px; 
            }
            hr {
                margin: 15px;
            }
        </style>
        
    </head>
    <body>
        
    </body>
</html>
