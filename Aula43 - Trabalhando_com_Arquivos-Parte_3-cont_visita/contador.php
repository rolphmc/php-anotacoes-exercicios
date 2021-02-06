<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula43 - Trabalhando com Arquivos - Parte 3 Contador de Visitas - </title>
    </head>
    <body>
        <?php
        
            $arquivo= fopen("contador.txt", "r");
            $cont= fread($arquivo, 21);//999 999 999 999 999 999 999
            $cont++;
            $arquivo= fopen("contador.txt", "w");
            fwrite($arquivo, $cont);
            fclose($arquivo);
            
            echo "<h1>Quantidade de Acessos: $cont </h1><br/>";
        ?>
        
    </body>
</html>
