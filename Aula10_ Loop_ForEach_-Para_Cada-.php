<!DOCTYPE html>
<?php
    echo "<h1>Aula 10 - Loop FOREACH (Para Cada)</h1>";
    echo "<p> Serve para carregar uma váriável com algum valor definido em um vetor e usa essa variável em um conjunto de procedimentos </p>";

    $transp=array("Carro","Moto","Bicicleta","Ônibus","Avião","Navio");
    
    foreach ($transp as $veiculo){
        echo "$veiculo<br/>";
    /*    if($veiculo=="Bicicleta")
            break;
     */   
    }
    
echo "<hr/>";

foreach ($transp as $veiculo){
    if($veiculo == "Bicicleta"){
        echo 'Bicicleta Está na Lista de Veículos <br/>';
        break;
    }
    
    if($veiculo == "Trem")
        echo 'Trem está na Lista de Veículos <br/> ';
}
    
    echo "<p> Para condicionais com apenas um comando, não é necessário a abertura de chaves {}</p>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 10  - Loop FOREACH (Para Cada) </title>
        <style>
            p {
                color: #ff0000;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            hr {
                margin: 15px;
            }
        </style>
        <title></title>
    </head>
    <body>
        
    </body>
</html>
