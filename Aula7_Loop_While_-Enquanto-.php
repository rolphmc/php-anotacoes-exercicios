<!DOCTYPE html>
<?php
    echo "<h1>Aula 7 - Loop While (Enquanto)</h1>";
    echo "<p> While é usado quando não sabemos o nº de vezes que havera determinada repetição </p>";
    
$i=0;
$tam=5;
$vet=array($tam);
    
while($i < $tam){
    echo 'Valor da variável i: '.$i.'<br/>';
    $i++;
}
echo '<hr/>';

$i=0;
while ($i < $tam){
    $vet[$i]="PHP".$i;
    $i++;
}
$i=0;
while ($i < $tam){
    echo $vet[$i].'<br/>';
    $i++;
}


    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 7 - Loop While </title>
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

