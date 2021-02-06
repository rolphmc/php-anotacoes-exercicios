<!DOCTYPE html>
<?php
    echo "<h1> Aula37_MySQL - Comando Update </h1>";
    echo "<p> ERRO COMETIDO: fornecer informações para atulaização que não condizem com as regras estruturais do BD</p><br/>";
    
    include "conexao.inc";
    
    $sql="UPDATE tb_cadastro SET telefone=1144444 WHERE status=0";
    $res= mysqli_query($con,$sql);
 
    if($res){
        echo "Registro Atualizado";
    }else{
        echo "ERRO no Update";
    }
    
    //UPDATE tabela SET campo a ser alterado WHERE condição
    
    mysqli_close($con);
    echo "<h2><p></p></h2>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula36 MySQL - Deletando registros Selecionados 1 </title>
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
