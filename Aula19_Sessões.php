<!DOCTYPE html>
<?php
    echo "<h1> Aula 19  - Sessões </h1>";
    echo "<p> Sessões são usadas para armazenar valores em um determinado site como, login, senha, variáveis necessárias para o funcionamento de diversas páginas, validações, etc... sem estar carregando-as a todo momento.</p><br/>";
    
    $destruir = false;
            
    session_start();
    $_SESSION['vlog']="n";    
    $_SESSION['vnome']="Rodolfo";
    $_SESSION['vtexto']="texto para Teste";
    
    echo"<h2> Exemplo de Retorno da variável armazenada dentro de uma sessão</h2><hr/>";
    echo $_SESSION['vnome'];
    echo"<hr/>";
    
    echo"<h2> Exemplo de Retorno da variável com um texto armazenado dentro de uma sessão</h2><hr/>";
    echo $_SESSION['vtexto'];
    echo"<hr/>";
    
    echo "<p> Caso queira deletar o conteúdo de uma variável em uma sessão, basta usar o comando 'unset'    com o nome da variável.</p><br/>";
    
    echo"<a href='Aula19_Sessões/pg1.php' target=_self> Abre pg1</a>";
    
    echo "<p> Caso queira deletar o conteúdo completo de uma sessão, basta usar o comando 'session_destroy()'.</p><br/>";
    
    echo"<h2> Exemplo de Retorno da variável vcanal com condicional isset, caso ela 'já' exista, ira carregar abaixo:</h2><hr/>";
    if (isset($_SESSION['vcanal'])){        
        echo $_SESSION['vcanal'];
        echo"<hr/>";
    }else{
        echo "Variável criada na pagina 1 ainda não carregada na sessão";
        echo"<hr/>";
    }
    
    if($destruir){
    session_destroy();
    }
    
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 19  - Sessões </title>
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
