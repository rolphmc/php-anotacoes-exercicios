<!DOCTYPE html>
<?php
    echo "<h1> Aula 18  - Passagem de valores pela url (página de Passagem) </h1>";
    echo "<p> Metodo para passagens de valores de variáveis entre paginas, através da URL.<br/> Erros comuns acontecem nas Aspas do método href... <br/> Para Transferência de Frases, o metódo simples não é válido. </p><br/>";
    
    $texto="aula de php";
    $Nome="Rodolfo";
    $canal="Vlog professor Bruno";
    
    echo "<h2> Método simples (Apenas Palavras)</h2>";
    echo"<a href=Aula18_Passagem_de_valores_pela_url/pg1.php?tx=".$texto." target=_self> Abre pg1</a>";
    
    echo "<h2> Método padrão de envio para URL de frases e diversas variáveis consecutivas (Função URLencode)</h2>";
    echo"<a href=Aula18_Passagem_de_valores_pela_url/pg1.php?tx=".urlencode($texto)."&no=".$Nome."&ca=".urlencode($canal)." target=_self> Abre pg1</a><br/>";
    
    echo '<p>usa-se "?" apenas no final da url para o início das sentenças de passagem, porém para separar cada variável usar-se "&" antes de cada variável da URL</p>';
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 18  - Passagem de valores pela url </title>
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
