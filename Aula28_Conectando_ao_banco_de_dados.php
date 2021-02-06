<!DOCTYPE html>
<?php
    echo "<h1> Aula 28 - Conectando ao Banco de Dados </h1>";
    echo "<p> A conexão ao banco de dados é algo facil, porém para cada uma das tabelas necessárias no projeto, é necessário uma conexão, para isso usa-se a chamada por 'include' de um arquivo '.inc' onde coloca-se todas as conexões desejadas para aquele momento. </p><br/>";
    
    include 'conexao.inc';
   
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }else{
    echo "Connection ok: ";
    } 
    
    echo "<h2/>$linhas<h2/>";    
    mysqli_close($con);
    
    echo "<p> A conexão deve ser encerrada após o seu uso</p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 28 - Conectando ao Banco de Dados </title>
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
