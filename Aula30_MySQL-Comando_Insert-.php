<!DOCTYPE html>
<?php
    echo "<h1> Aula 30 - MySQL - Comando Insert </h1>";
    echo "<p> Comando para inserção de registros em tabelas do banco de dados<br/>INSERT INTO = insere dentro <br/>Campos numéricos não necessitam de ''</p><br/>";
    
    include "Aula28_Conectando_ao_banco_de_dados/conexao.inc";

    $vnome="teste2";
    $vuser="teste2";
    $vsenha="teste2";
    $vmail="teste2@teste.com.br";
    $vtel="11 99999999"; 
    $vst=1;
    $vobs="teste2";
    
    $sql="INSERT INTO tb_cadastro VALUES (null, '$vnome', '$vuser', '$vsenha', '$vmail', '$vtel', $vst, '$vobs')";
    
    //INSERT INTO = insere dentro da tabela xx os valores ()
    /*para inserir apenas um único item, coloca-lo logo após a tabela , porém nesse caso o campo da tabela em questão não pode ser nulo*/
    // Campos numéricos não necessitam de ''
    
    $res= mysqli_query($con, "$sql");
    $num = mysqli_affected_rows($con);
    echo "$num Registros Inseridos";
    
    mysqli_close($con);
    
    echo "<p> Para executar testes, basta trocar os valores das variáveis dentro do código <br/> maioria das anotações referentes a essa aula, estão contidas também dentro do código. </p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 30 - MySQL - Comando Insert  </title>
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
