<!DOCTYPE html>
<?php
    echo "<h1> Aula 19  - Sessões </h1>";
    echo "<p> página de Teste 2 da aula 19 </p><br/>";
   
    session_start();
    echo $_SESSION['vnome'];
    echo "<br/>".$_SESSION['vtexto'];
    echo "<br/>".$_SESSION['vcanal'];
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 19  - Sessões </title>
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
        <a href="pg1.php" target="_self"> Volta pg1 </a>
    </body>
</html>
