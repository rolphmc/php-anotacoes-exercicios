<!DOCTYPE html>
<?php
    
    if(isset($_COOKIE["numLogin"])){
        $n1=$_GET["num"];
        $n2=$_COOKIE["numLogin"];
        
        if($n1 != $n2){
            echo "Login Não Efetuado";
            exit;
        }
    }else{
        echo "Login Não Efetuado";
        exit;
    }
        
        echo "<h2>Página Inicial</h2>";
        

?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula39 - MySQL - Sistema de Login Basico </title>
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
            table{
                border: double;
            }
            td{
                text-align: center;
                border-style: double;
                margin: auto;
                padding: 0px;
            }
        </style>
        
    </head>
    <body>
        
    </body>
</html>
