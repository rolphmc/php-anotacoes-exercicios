<!DOCTYPE html>
<?php
    echo "<h1>Aula 8 - Loop Do While (Faça pelo menos 1 vez enquanto)</h1>";
    echo "<p> Diferença do While para o DoWhile é que, no primeiro a variável já por chegar a condicional de forma satisfeita, porém o segundo, mesmo essa estando satisfeita, ele executará pelo menos uma vez os comandos inseridos dentro do bloco.<br/> While = testa a condicional no início dos comandos <br/> DoWhile = Testa a condicional apenas no final dos comandos </p>";

    echo "<p> Tag '< pre >' do HTML deixa todas as letras com tamanhos identicos</p>";
    
    echo "<pre><h2>Loop DoWhile</h2>";
    
$i=0;
$tam=3;
do{
    echo "Variável i tem o valor: $i<br/>"; 
    echo "Variável tam tem o valor: $tam<br/>";
    $i++;
}while ($i < $tam);
    
echo"<hr/>";

    echo "<h2>Loop While</h2>";
$i=0;
$tam=3;
while($i < $tam){
   echo "<pre>Variável i tem o valor: $i<br/>"; //<pre> manetém todas as fontes no mesmo tamanho no browser.
    echo "Variável tam tem o valor: $tam<br/>";
    $i++; 
}

 echo "<p> Para testar a diferença dos loops, basta trocar o valor das variáveis</p>";

?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula8  - Loop Do While (Faça pelo menos 1 vez) </title>
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

