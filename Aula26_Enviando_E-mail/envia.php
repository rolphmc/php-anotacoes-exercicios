<!DOCTYPE html>
<?php
    
    /*Recebimento dos dados que estão sendo transmitidos do arquivo principal*/
    $vMail=$_POST['email_text'];
    $vAssunto=$_POST['assunto_txt'];
    $vMsg=$_POST['msg_txt'];
    //informações sobre propriedade mail - http://php.net/manual/pt_BR/function.mail.php
    
    
    if (mail($vMail,$vAssunto,$vMsg)){
        echo "<h1>mensagem enviada</h1><br/>";
        echo "<a href='../Aula26_Enviando_Email.php' target='_self'>Voltar</a>";
    }else{
        echo "<h1>Erro no envio</h1>";
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
