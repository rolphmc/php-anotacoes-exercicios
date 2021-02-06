<!DOCTYPE html>
<?php
    echo "<h1> Aula 26 - Enviando Email </h1>";
    echo "<p>  </p><br/>";
    
            
    echo "<p> </p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 26 - Enviando Email </title>
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
        <form name="email" method="post" action="Aula26_Enviando_E-mail/envia.php">
            <label><hr/>E-mail</label><br/>
            <input type="text" name="email_text"/><br/>
            <label>Assunto</label><br/>
            <input type="text" name="assunto_txt"/><br/>
            <label>Mensagem</label><br/>
            <textarea name="msg_txt" rows="5" cols="50"></textarea><hr/>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
