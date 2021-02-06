<!DOCTYPE html>
<?php
    echo "<h1> Aula 14  - Funções Recursivas </h1>";
    echo "<p> Recursividade - Nada mais é que uma função que chama ela mesma. <br/> *Se atentar para não entrar em loops infinitos! </p><br/>";
   
    echo "<h2> Como parar e evitar loops infinitos </h2>";
    function aula($num){
        if($num!=0){
            echo "<hr/> Função Aula com valor $num <hr/>";
            aula($num-1);
        }
    }
    
    aula(3);
    
    echo "<h2> Uso de nº fatorial como exemplo para recursividade </h2>";

    function fat($num){
        if($num<0){
            return - 1; 
        }else if($num <=1){
            return 1;
        }else{
            return $num*fat($num-1);            
        }
    }

    $fatvar=-10;    
    echo "<hr/> Resultado de $fatvar! = ".fat($fatvar)." <hr/>";
    
    echo "<p> Lembrando Nº Fatorial: 4! = 4x3x2x1 = fat(4) <p>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 14  - Funções Recursivas </title>
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
