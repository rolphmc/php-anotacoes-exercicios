<!DOCTYPE html>
<?php
    echo "<h1> Aula35 MySQL - Comando Delete </h1>";
    echo "<p> </p><br/>";
    
    include "Aula28_Conectando_ao_banco_de_dados/conexao.inc";
    
    $sql="Delete FROM tb_cadastro WHERE cod='3'";
    $res=mysqli_query($con, $sql);
    $lin= mysqli_affected_rows($con);
    if($lin > 0){
        echo "<p>Registro Deletado</p>";
    }else{
        echo "<p> Nenhum Registro Deletado</p>";
    }
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula34 MySQL - Operador LIKE </title>
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
