<!DOCTYPE html>
<?php
    echo "<h1> Aula 25 - Classes Parte 6 (Final) </h1>";
    echo "<p> A palavra reservada 'final', diz que o método não pode ser subscrito. <br/>Final não pode ser aplicado sobre propriedades apenas para métodos </p><br/>";
    
    abstract class carroBase{
            public $cor;
            public $vel;


        function __construct($cr){
            $this->cor=$cr;
        }

        function status(){
            echo "<hr/>";
            echo "Carro: ".$this->cor;
            echo "<br/> Velocidade: ".$this->vel;
            echo "<hr/>";
        }

        final function cor(){
            echo "<hr/> Minha cor: ".$this->cor;
            echo "<br/>Método Original<hr/>";
        }
    }

    class carro extends carroBase{
        /*function cor(){
            echo "<hr/>Cor: ".$this->cor;
            echo "<hr/>";
        }*/
    }
    
    class transp extends carroBase{
        
    }
    
    
    $car=new carro("Vermelho");
    $tra=new transp("Azul");

    $car->cor();
    $tra->cor();
            
    echo "<p> Sempre quando desejar protegar o método contra sobrescrita, basta colocar a propriedade final no método em questão<br/> Caso usar a propriedade final para Classes, a mesma não podera ser herdada em nenhuma outra classe! </p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 25 - Classes Parte 6 (Final) </title>
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
        </style>
        
    </head>
    <body>
        
    </body>
</html>
