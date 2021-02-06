<!DOCTYPE html>
<?php
    session_start();
    
    if(isset($_SESSION["numLogin"])){
        $n1=$_GET["num1"];
        $n2=$_SESSION['numLogin'];
        
        if($n1 != $n2){
            echo "Login Não Efetuado";
            exit;
        }
    }else{
        echo "Login Não Efetuado";
        exit;
    }
        
        echo "<h2>Página Inicial</h2><br/>";
        echo "Username logado: ".$_SESSION['username']."<br/>";
        
        
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 40 - Sistema de Login com Sessões </title>
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
