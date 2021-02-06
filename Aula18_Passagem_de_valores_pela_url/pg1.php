<!DOCTYPE html>
<?php
    echo "<h1> Aula 17  - Passagem de valores pela url (página de Recebimento </h1>";
    echo "<p></p> <br/>";
    
    $vtexto=$_GET["tx"];
    echo "$vtexto <br/>";
    
    if (isset($_GET["no"])){
    $vnome=$_GET["no"];
    echo "$vnome <br/>";
    }
    
    if (isset($_GET["ca"])){
    $vcanal=$_GET["ca"];
    echo "$vcanal <br/>";
    }
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Pagina 1 </title>
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
            div {
                background-color: coral;
                padding: 20px;
            }
        </style>
        
    </head>
    <body>
        
    </body>
</html>
