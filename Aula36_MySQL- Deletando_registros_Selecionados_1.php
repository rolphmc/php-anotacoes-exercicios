<!DOCTYPE html>
<?php
    echo "<h1> Aula36 MySQL - Deletando registros Selecionados 1 </h1>";
    echo "<p> NÃO COLOCAR * ENTRE DELETE E FROM NUNCAAAAA!!!!</p><br/>";
    
    
    
    
    echo "<h2><p>Muita Atenção!!! às variáveis inseridas dentro do input checkbox o 'sel[]' não deve acompanhar o '$'</p></h2>";
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
        <form name="f_excluir" method="post" action="Aula36_MySQL- Deletando_registros_Selecionados_1.php">
        <table>
            <tr>
                <td>Código</td><td>Nome</td><td>Selecionar</td>
            </tr>
            
        <?php
        
        include "conexao.inc";
            //CHECAGEM DE CONEXÃO:
            if (isset($con)) {
            echo "CONNECTION OK: <br/>";
            }else{
            echo "Connection FAIL: ".(mysqli_error($con));
            } 
    
            if(isset($_POST['sel'])){
                echo "Teste isset OK<br/>";
                foreach ($_POST['sel'] as $codigo){
                    echo "teste foreach OK <br/>";
                $sql="DELETE FROM tb_cadastro WHERE cod=$codigo" or die(mysql_error()); 
                    $res= mysqli_query($con, $sql);
                }
                echo "Formulário submetido nº de linhas alteradas ";
                $linhas = mysqli_affected_rows($con);
                echo $linhas;
            }else{
                echo "Formulário não submetido";                
            }
            
        
            $sql="SELECT * FROM tb_cadastro ORDER BY cod";
            $res=mysqli_query($con,$sql);
            
                while ($reg=mysqli_fetch_row($res)){
                    $vcod=$reg[0];
                    $vnome=$reg[1];
                    echo "<tr/>";
                    echo "<td>$vcod</td><td>$vnome</td>";
                    echo "<td align=center><input type=checkbox value=$vcod name=sel[]><td/>";
                    echo "<tr/>";
                }
            
            mysqli_close($con);
        ?>            
        </table>
            
        <br/>
        
        <!--<input type="hidden" name="f_del" value="f_del"/>-->
            
        <input type="submit" value="Excluir" name="bt_excluir">
    </form>
    </body>
</html>
