<!DOCTYPE html>
<?php
    echo "<h1> Aula 12  - Funções </h1>";
    echo "<p> Grupo de comandos que podem ser chamados em determinados momentos dentro do código. Esse recurso faz com que não haja a necessidade de repetir diversas vezes os comandos dentro do código, limitando-se a apenas chamar tais comandos. </p><br/>";
    
    function aula(){
        echo '<hr/>Olá Mundo <br/>';
        echo "Aula Sobre Funções <hr/>";
    }
    
    echo "<h2> Função sem Parâmentros </h2>";
    aula();
    
    function soma ($n1,$n2){
        $res=$n1+$n2;
        echo "<hr/>Soma de $n1 com $n2 = $res <hr/>";
    }
    
    echo "<h2> Função com Parâmentros </h2>";
    soma(3,7);

    function soma2 ($n1,$n2){
        $res= $n1+$n2;
        return $res;
    }
    
    $so=soma2(10,5);
    echo "<h2> Função com Parâmetros e Retorno através da variável SO </h2>";
    echo "<hr/>Resultado de Soma2 = $so <hr/>";
    
    $valores=array(1,3,5,7,9,12,6,4,20,18,19,34,2);
    function media ($val){
        $tam= count($val);
        $soma=0;
        for($i=0;$i<$tam;$i++){
            $soma+=$val[$i];
        }
        return $soma/$tam;
    }
    
    $med=media($valores);
    echo "<h2> Função com Parâmetros e Retorno para média em um Vetor </h2>";
    echo "<hr/>Resultado da média do vetor= $med <hr/>";






    echo "<p> A sintaxe de uma função é:<br/> function = Palavra reservada pelo sistema para iniciar uma Função <br/> nome = Nome que deseja atribuir a função; <br/> () = Dentro do Parenteses é colocado os parâmetros que regem determinada função, pode ser ignorado  deixando-o vazio <br/><p id='identacao'> Dentro dos Parâmetros pode se colocar variáveis separando-as com vírgulas. </p><br/> <h3> Para chamar a função, basta digitar nome();</h3><br/><h3> Para Retornar o valor da função, basta digitar return dentro da função</h3><br/><p>para o retorno usar uma váriável de recebimento, em caso de dúvida vide código</p>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 12  - Funções </title>
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
        </style>
        <title></title>
    </head>
    <body>
        
    </body>
</html>
