<!DOCTYPE html>
<?php
session_start();
if($_SESSION['vlog']=="s"){
    echo "<h1> Aula 19  - Sessões </h1>";
    echo "<p> página de Teste da aula 19 </p><br/>";
   
    
    $_SESSION['vcanal']="Vlog do Professor Bruno";
    echo $_SESSION['vnome'];
    echo "<br/>".$_SESSION['vtexto'];
    
    echo"<a href='pg2.php' target='_self'> Abre pg2</a>";
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
        <a href="../Aula19_Sessões.php" target="_self">volta aula 19</a>
    </body>
</html>
<?php 

}else{
    echo "Login Não Autorizado!";
}

?>