<!DOCTYPE html>
<?php
    echo "<h1> Aula 13 - Recebendo dados de Fomulário </h1>";
    echo "<p> Os comandos inseridos nesse documento devem ser iniciados a partir da pagina html da aula 13 contida em pasta separada! </p><br/>";
    
    $vnome=$_POST["f_nome"];
    $vsenha=$_POST["f_senha"];
            
    echo "Nome: ".$vnome."<br/>";
    echo "Senha: ".$vsenha."<br/>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 13 - Recebendo dados de Fomulário </title>
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
