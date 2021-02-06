<!DOCTYPE html>
<?php
    echo "<h1> Aula44 - Formulário com Múltiplas Tabelas </h1>";
    echo "<p> </p><br/>";
    
    include '../Aula28_Conectando_ao_banco_de_dados/conexao.inc';
    $vnome=$_GET['fnome'];
    $vuf=$_GET['fuf'];
    $vt_tmp=Array(0,0,0,0);
    
    echo "Nome: $vnome <br/> Estado: $vuf <br/> Transportes Selecionados: <br/>";
    
    foreach ($_GET['ftransp'] as $tra){
        $vt_tmp[$tra-1]=1;
        echo "$tra<br/>";
    }
    echo "<hr/>";
        
    
    $sql="INSERT INTO tb_pesquisa VALUES(NULL,'$vnome','$vuf','$vt_tmp[0]','$vt_tmp[1]','$vt_tmp[2]','$vt_tmp[3]')";
    $res= mysqli_query($con, $sql);
    
    echo "$vnome<br/>";
    echo "$vuf<br/>";
    echo "$vt_tmp[0]<br/>";
    echo "$vt_tmp[1]<br/>";
    echo "$vt_tmp[2]<br/>";
    echo "$vt_tmp[3]<br/>";
    
    echo "Pesquisa Gravada!";
    mysqli_close($con);
    
    echo "<h2><p></p></h2>";
?>