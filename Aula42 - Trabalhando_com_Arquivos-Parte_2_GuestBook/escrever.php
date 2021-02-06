<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula42 - Trabalhando com Arquivos Parte 2 guestbook </title>
    </head>
    <body>
        <?php
        
        $vnome=$_POST['f_nome'];
        $vmsg=$_POST['f_msg'];
        $conteudo=$vmsg."\r\n".$vnome."\r\n";
        
        $arquivo=fopen("visitas.txt", "a");
        fwrite($arquivo, $conteudo);
        
        echo "Mensagem gravada : $conteudo <br/>";
        
        fclose($arquivo);
        
        ?>
        
        <a href="index.html" target="self">Voltar</a><hr/>
    </body>
</html>
