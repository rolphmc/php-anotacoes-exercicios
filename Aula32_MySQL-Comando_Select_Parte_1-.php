<!DOCTYPE html>
<?php
    echo "<h1> Aula32 - MySQL - Comando Select Parte 1 </h1>";
    echo "<p> WHERE = Quando</p><br/>";
    
    include "Aula28_Conectando_ao_banco_de_dados/conexao.inc";
    
    $vcat1=$_POST['f_cat1'];
    $vcat2=$_POST['f_cat2'];
    $sql="SELECT * FROM tb_produtos WHERE cat = $vcat1 OR cat = $vcat2";
    $res= mysqli_query($con, $sql);
    $linhas= mysqli_num_rows($res);
        echo "$linhas Registros Encontrados!";
    
    mysqli_close($con);
    
    echo "<p></p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula32_MySQL-Comando_Select_Parte_1- </title>
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
