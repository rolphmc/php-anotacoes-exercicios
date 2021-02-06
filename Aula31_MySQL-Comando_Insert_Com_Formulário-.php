<!DOCTYPE html>
<?php
    echo "<h1> Aula 31 - MySQL - Comando Insert com formuláio </h1>";
    echo "<p> Essa aula apenas funciona abrindo primeiramente o formulário HTML contigo na pasta da aula em questão.<br/> o foco da aula é executar o save de registros em um banco de dados através de um formulário de inserçã <br/> nesse formulário foi encontrado um erro relativo ao numero de colunas em relação ao numero de campos do formulário ATENÇÃO A ESSE PROBLEMA ÓBIVIO!</p><br/>";
    
    include "Aula28_Conectando_ao_banco_de_dados/conexao.inc";
        
    $vcod=$_POST['f_cod'];
    $vprod=$_POST['f_prod'];
    $vpreco=$_POST['f_preco'];
    $vqtde=$_POST['f_qtde'];
    $vcat=$_POST['f_cat'];
    
    echo "$vcod <br/>";
    echo "$vprod <br/>";
    echo "$vpreco <br/>";
    echo "$vqtde <br/>";
    echo "$vcat <br/>";
    
    $sql= "INSERT INTO tb_produtos VALUES ('$vcod',$vcat,'$vprod',$vpreco,$vqtde)";    
    $res=mysqli_query($con,$sql) or die(mysqli_error($con));
    $linhas = mysqli_affected_rows($con);

    
    if ($linhas == 1){
        echo "Registro inserido com Sucesso<br/>";
    }else{
        echo "Falha na gravação do Registro<br/>";
    }
    
    mysqli_close($con);
    
    echo "<p></p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 31 - MySQL - Comando Insert com formuláio </title>
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
         <a href=Aula31_MySQL-Comando_Insert_Com_Formulário-\formAula31.html target='_self'>Voltar Ao Formulário</a>
    </body>
</html>
