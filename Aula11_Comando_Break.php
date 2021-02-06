<!DOCTYPE html>
<?php
    echo "<h1>Aula 11  - Comando Break </h1>";
    echo "<p> Comando de parada <br/> *Observação: usar o comando count ($ vet) para contar o número de itens dentro do vetor/array  </p>";
    
    $vet=array("Mouse","Teclado","Monitor","Memória","sair","Microfone","Impressora");
    $tam=count($vet);
    $i=0;
    
    echo "<h2> Exemplo comando break dentro de um While </h2>";
    $i=0;
    while($i<$tam){
        if($vet[$i]=="sair"){
            break;
        }else{
        echo "Valor do Vetor na Posição $i: $vet[$i] <br/>";
        $i++;
        }
    }
    
    echo '<hr/>';
       echo "<h2> Exemplo comando break dentro de um Do While </h2>";
    $i=0;
        Do{
        if($vet[$i]=="sair"){
            break;
        }else{
        echo "Valor do Vetor na Posição $i: $vet[$i] <br/>";
        $i++;
        }
        }while ($i<$tam);
    
    echo "<hr/>";    
    echo "<h2> Exemplo comando break dentro de um For </h2>";
    for($i=0;$i<$tam;$i++){
        if($vet[$i]=="sair"){
            break;
        }else{
        echo "Valor do Vetor na Posição $i: $vet[$i] <br/>";
        }  
    }
    
    echo '<hr/>';
    echo "<h2> Exemplo comando break dentro de um ForEach </h2>";
    $i=0;
    foreach ($vet as $perifericos){
        if($perifericos == "sair"){
            break;
        }else{
            echo "Valor do Vetor na Posição $i: $perifericos <br/>";
        $i++;
        }
    }
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 11  - Comando Break </title>
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
