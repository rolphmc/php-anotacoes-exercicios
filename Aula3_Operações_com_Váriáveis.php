<!DOCTYPE html>
<?php
 $num1=10;
 $num2=5;
 
    echo "<h1>Aritiméticos (Matemáticos)</h1>";
    $res = $num1 + $num2;
    echo "Soma de $num1 com $num2 = $res <br/>";
    $res = ($num1 - $num2)*2;
    echo "Doblo da Subtração de $num1 com $num2 = $res <br/>";
    
    $res = $num1 / $num2;
    echo "Divisão de $num1 com $num2 = $res <br/>";
    $res = $num1 % $num2;
    echo "Resto da Divisão de $num1 com $num2 = $res <br/>";
    echo "<p> *Quando é necessário usar o resto, usa-se [%] como operador</p>";
    $res = $num1 * $num2;
    echo "Multiplicação de $num1 com $num2 = $res";
    
    echo "<hr/>";//LINHA DIVISÓRIA

    $num1 = $num1 + 1;
    $num1++;
    echo "Novo valor da var num1: $num1 <br/>";
    echo "<p>*Usar '++' em frente a variável acrescenta mais 1 a ela </p>";
    
    $num2 = $num2 + 2;
    $num2 += 2;
    echo "Novo valor da var num2: $num2 <br/>";
    echo "<p> *Usar '+= n' em frente a variável acrescenta 'n' valor a ela. Essa técnica pode ser usada em outros operadores bastando trocar apenas o simbolo do operador. </p>";
    
    echo "<h1> Operadores de Comparação </h1>";
    Echo "$num1 == $num2 (é igual) <br/>$num1 != $num2 (é diferente) <br/>$num1 <> $num2 (é diferente também) <br/>$num1 > $num2 (é maior) <br/>$num1 < $num2 (é menor) <br/>$num1 >= $num2 (é maior ou igual) <br/>$num1 <= $num2 (é menor ou igual) <br/>";

    echo "<h1> Operadores Lógicos </h1>";
    echo "AND ou && (e)<br/>OR (e)<br/>";   
    echo "<p>*Copiar esses comandos tanto operadores de comparação quanto lógicos para as aulas correspondentes</p>";
    
?>
    
<html>
<head>
        <meta charset ="UTF-8"/>
	<title> Aula 3 - Operações com Váriáveis </title>
        <style>
            p {
                color: #ff0000;
                margin-top: 5px;
                margin-bottom: 5px;
            }           
        </style>
</head>
<body>

</body>
</html>