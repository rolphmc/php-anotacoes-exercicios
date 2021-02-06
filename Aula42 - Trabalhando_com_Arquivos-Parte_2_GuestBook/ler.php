<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula42 - Trabalhando com Arquivos Parte 2 guestbook </title>
    </head>
    <body>
        <?php
        
        $arquivo=fopen("visitas.txt", "r");
        while (!feof($arquivo)){
            echo fgets($arquivo, 4096);
            echo "<br/>".fgets($arquivo,100);
            echo "<br/><br/>";
        }
        
        fclose($arquivo);
        ?>
        <a href="index.html" target="self">Voltar</a><hr/>
    </body>
</html>
