<!DOCTYPE html>
<?php
    echo "<h1> Aula 4 - Arrays (vetores) </h1>";
    $vet=array(7);
    $vet2=array("nome"=>"Rodolfo","cidade"=>"BH","curso"=>"PHP");
    
    $mat=array(
        array("Carro 1",65000),
        array("carro 2",35000),
        array("carro 3",50000),
        );
    
    $i = 6;
    echo "<p> *Os vetores (arrays) são conjunto de elementos agrupados por uma única variável, um exemplo é inserir todos os estados do brasil em um único grupo</p>";
    
    $vet[0]="Carro";
    $vet[1]="Avião";
    $vet[2]="Navio";
    $vet[3]="Moto";
    $vet[4]="Ônibus";
    $vet[5]=123456;
    $vet[6]=$vet2["nome"];
    
    echo "<h2> Array exemplo 1 </h2>";
    echo "Elemento do Índice $i = ".$vet[$i]."<br/>";
    echo "<p> *Os vetores (arrays) são conjunto de elementos agrupados por uma única variável, um exemplo é inserir todos os estados do brasil em um único grupo</p>";
    
    echo "<h2> Array Exemplo 2 </h2>";
    echo "Nome: ".$vet2["nome"]."<br/> Cidade: ".$vet2["cidade"]."<br/>Curso: ".$vet2["curso"]."<br/>";
    
    echo "<h2> Matrizes </h2>";
    echo "Carro A ".$mat[0][0]." - Valor: ".$mat[0][1]."<br/>";
    echo "Carro B ".$mat[1][0]." - Valor: ".$mat[0][1]."<br/>";
    echo "Carro C ".$mat[2][0]." - Valor: ".$mat[0][1]."<br/>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 4 - Arrays (vetores) </title>
        <style>
            p {
                color: #ff0000;
                margin-top: 5px;
                margin-bottom: 5px;
            }           
        </style>
        <title></title>
    </head>
    <body>
        
    </body>
</html>
