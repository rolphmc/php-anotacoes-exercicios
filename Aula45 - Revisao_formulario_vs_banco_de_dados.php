<!DOCTYPE html>
<?php
    echo "<h1> Aula44 - Formulário com Múltiplas Tabelas </h1>";
    echo "<p> </p><br/>";
    
    include 'Aula28_Conectando_ao_banco_de_dados/conexao.inc';
    
        $vnome=$_GET['f_nome'];
        $vsenha=$_GET['f_senha'];
        $vsexo=$_GET['f_sexo'];
        $vesporte=$_GET['f_esporte'];
            if(isset($_GET['f_tcarro'])){
                $vtcarro=$_GET['f_tcarro'];
            }else{
                $vtcarro=0;
            }
            if(isset($_GET['f_tmoto'])){
                $vtmoto=$_GET['f_tmoto'];
            }else{
                $vtmoto=0;
            }
            if(isset($_GET['f_tmoto'])){
                $vtonibus=$_GET['f_tmoto'];
            }else{
                $vtonibus=0;
            }
        $vcoment=$_GET['f_coment'];
        
        $sql="INSERT INTO tb_revisao VALUES(NULL,'$vnome','$vsenha','$vsexo','$vesporte','$vtcarro','$vtmoto','$vtonibus','$vcoment')";        
        $res= mysqli_query($con, $sql);
        
    mysqli_close($con);
    
    echo "<h2><p>Arquivo Gravado!</p></h2>";
    echo "<a href=Aula45 - Revisao_formulario_vs_banco_de_dados/Aula45.html target='self>Voltar</a><br/>";
   
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
        
        
        
    </body>
</html>
