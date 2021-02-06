<!DOCTYPE html>
<?php
    echo "<h1> Aula39 - MySQL - Sistema de Login Basico </h1>";
    echo "<p> NUNCA esquecer de colocar aspas simples ou compostas em campos strings, mesmo que esses sejam representados por variáveis, na duvida verificar tipos de dados isentos no manual PHP</p><br/>";
    
    include "conexao.inc";
    
    $user=$_POST['f_user'];
    $senha=$_POST['f_senha'];
    
    $sql="SELECT * FROM tb_cadastro WHERE username='$user' AND senha='$senha'";
    $res= mysqli_query($con, $sql);
    $linhas= mysqli_affected_rows($con);
    
        if($linhas>0){
            $num=rand(100000,900000);
            setcookie("numLogin", $num);
            header("Location: Aula39 - MySQL - Sistema_de_Login_Basico/aula39b.php?num=$num");
        }else{
            echo "ERRO NO LOGIN<br/>";
            $caminho="Aula39 - MySQL - Sistema_de_Login_Basico/aula39.html";
            echo "<a href=''>Voltar<a/>";
        }

    mysqli_close($con);
    echo "<h2><p></p></h2>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula39 - MySQL - Sistema de Login Basico </title>
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
