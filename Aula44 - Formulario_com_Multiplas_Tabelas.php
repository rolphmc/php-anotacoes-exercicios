<!DOCTYPE html>
<?php
    echo "<h1> Aula44 - Formulário com Múltiplas Tabelas </h1>";
    echo "<p> </p><br/>";
    
    include 'Aula28_Conectando_ao_banco_de_dados/conexao.inc';

    
    echo "<h2><p></p></h2>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula44 - Formulário com Múltiplas Tabelas  </title>
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
        <hr/>
        <h1>Pesquisa</h1>
        
        <form name="fcad" action="Aula44 - Formulario_com_Multiplas_Tabelas/processaAula44.php" method="get">
            
            <label>Nome;</label>
            <input type="txt" name="fnome"/><br/><br/>
            
            <label>Selecione seu Estado:</label>
            <select name="fuf">
                <?php 
                    
                $sql="SELECT * FROM tb_uf ORDER BY uf";
                    $res= mysqli_query($con, $sql);
                    while ($vreg= mysqli_fetch_row($res)){
                        $vuf=$vreg[0];
                        $vsigla=$vreg[1];
                        echo "<option value=$vsigla>$vuf</option>";
                    }
                ?>
            </select>
            <br/><br/>
            
            <label>Selecione Seus Meios de Transportes Favoritos:</label><br/>
                 <?php 
                    $sql="SELECT * FROM tb_transporte";
                    $res= mysqli_query($con, $sql);
                    while ($vreg= mysqli_fetch_row($res)){
                        $vcod=$vreg[0];
                        $vtra=$vreg[1];
echo "<input type=checkbox name=ftransp[] value=$vcod>$vtra<br/>";
                    }
                ?>
            <br/>
            
            <input type="submit" value="Gravar Pesquisa"/>
            
        </form>
        
    </body>
</html>

<?php 
mysqli_close($con);
?>