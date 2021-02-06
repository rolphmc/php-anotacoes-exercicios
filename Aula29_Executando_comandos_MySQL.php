<!DOCTYPE html>
<?php
    echo "<h1> Aula29 - Executando Comandos MySQL </h1>";
    echo "<p> MySQLi_query conecta o sistema à tabela desejada no banco de dados - http://php.net/manual/pt_BR/mysqli.query.php </p><br/>";
    
    include "Aula28_Conectando_ao_banco_de_dados/conexao.inc";
    
    $res= mysqli_query($con,"SELECT * FROM tb_cadastro");
    $linhas= mysqli_num_rows($res);
    //retorna o número de linhas na tabela
    
    echo "Encontrados $linhas Registros na tabela tb_cadastro";
    
    
    
    
    mysqli_close($con);
    
    echo "<p>  </p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula29 - Executando Comandos MySQL </title>
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
