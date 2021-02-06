<!DOCTYPE html>
<?php
    echo "<h1> Aula34 MySQL - Operador LIKE </h1>";
    echo "<p> Comando msqli_fetch_row retorna os dados contidos nas linhas de uma tabela para uma variável ou vetor.</p><br/>";
    
    include "Aula28_Conectando_ao_banco_de_dados/conexao.inc";
    $vpes="t%";
    $sql= "SELECT * FROM tb_produtos WHERE cod LIKE '$vpes'";
    $res= mysqli_query($con, $sql);
    
       
    echo "<p></p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula34 MySQL - Operador LIKE </title>
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
        <table border="1">
            <tr>
            <td>Código</td>
            <td>Categoria</td>
            <td>Produto</td>
            <td>Preço</td>
            <td>Quantidade</td>
            </tr>
            <?php 
                
                while($vreg= mysqli_fetch_row($res)){
                    $vcod=$vreg[0];
                    $vprod=$vreg[1];
                    $vpreco=$vreg[2];
                    $vqtde=$vreg[3];
                    $vcat=$vreg[4];
                    
                    echo "<tr/>";
                    echo "<td>$vcod</td><td>$vprod</td><td>$vpreco</td><td>$vqtde</td><td>$vcat</td>";
                    echo "<tr/>";
                }
               mysqli_close($con);
            ?>
        </table>
         
        
    </body>
</html>
