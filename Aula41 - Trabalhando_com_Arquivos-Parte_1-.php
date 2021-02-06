<!DOCTYPE html>
<?php
    echo "<h1> Aula41 - Trabalhando com Arquivos Parte 1 </h1>";
    echo "<p> Comandos fopen:<br/>"
            . "r - abre para leitura, ponteiro no início<br/>"
            . "r+ - Abre para leitura e escrita<br/>"
            . "w - Abre para escrita, ponteiro no início e zera, se o arquivo não existir ele cria<br/>"
            . "w+ - Abre para leitura e Escrita<br/>"
            . "a - Abre para escrita, ponteiro no final, se o arquivo não existir ele cria<br/>"
            . "a+ - Abre para leitura e Escrita<br/>"
            . "x - abre para escrita, ponteiro no início, se o arquivo existir ele gera um erro do tipo E_WARNING<br/>"
            . "x+ - Abre para leitura e Escrita<br/>"
            . "</p><br/>";
            
$arquivo=fopen("Aula41 - Trabalhando_com_Arquivos-Parte_1-/aula41.txt", "a");
fwrite($arquivo, "\r\nCurso de PHP");

$arquivo=fopen("Aula41 - Trabalhando_com_Arquivos-Parte_1-/aula41.txt", "r");
    $conteúdo=fread($arquivo,100);
    echo $conteúdo;
    
    fclose($arquivo);
    echo "<h2><p></p></h2>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula41 - Trabalhando com Arquivos Parte 1 </title>
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
