<!DOCTYPE html>
<?php
    echo "<h1> Aula 16  - Include </h1>";
    echo "<p> Include tem a finalidade de inserir uma instrução de códigos localizados em arquivos externos<br/>"
    . "Exemplo: <br/>"
            . "Temos um site com 50 páginas e em todas queremos inserir um mesmo menu, para isso construimos o menu externamente em ou outro arquivo e inserimos ele em todas as pages com o recurso include (semelhante a Call)."
            . "</p><br/>";
    
    echo "<h2>Exemplo de uso do recurso include chamando aula anterior</h2><hr/>";
    echo "<div>";
    include "Aula15_Manipulacao_Data_e_Hora.php";
    echo "<hr/></div>";
        
    echo "<h2>Exemplo de uso do recurso include chamando Menu HTML</h2><hr/>";
    include "menu.inc.html";
    echo "<hr/></div>";
    
    echo "<p><h3>Uma boa prática é criar os arquivos que serão usados como includes, com o sufixo .inc <br/>"
    . "Porque?</h3>"
        . "<p>Note que nesse arquivo o include chamou o arquivo completo, incluindo também o título e qualquer outro elemento tanto do HTML quanto do PHP. Logo pode-se criar esses arquivos diretamente preparados para o local onde serão incluidos."
            . "</p><br/>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 16  - Include </title>
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
