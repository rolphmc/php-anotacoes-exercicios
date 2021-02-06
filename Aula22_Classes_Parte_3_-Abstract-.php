<!DOCTYPE html>
<?php
    echo "<h1> Aula 22 - Classes Parte 2 (Abstract) </h1>";
    echo "<p> Classes Abstratas não podem ser instanciadas (chamadas), servem como suporte para outras classes. </p><br/>";
    
    abstract class carroBase{
        var $potencia;
        // var é o mesmo que public
        public $velMax;
        var $portas;
        var $ligado=false;
        
        abstract function teste();
                
        function liga(){
            $this->ligado=True;
        }
        
        function desliga(){
            $this->ligado=FALSE;
        }
        
        function status (){
            echo "<hr/>";
            echo "Potência: ".$this->potencia."<br/>";
            echo "Velocidade Máxima: ".$this->velMax."<br/>";
            echo "Portas: ".$this->portas."<br/>";
            if ($this->ligado){
                echo "Carro Ligado<br/>";
            }else{
                echo "Carro Desligado<br/>";
            }
            echo "<hr/>";
        }
    }
    
    class carro extends carroBase{
        
        function __construct($pt,$vm,$po) {
            $this->potencia=$pt;
            $this->velMax=$vm;
            $this->portas=$po;
            $this->status();
        }
        
        function teste() {
        // caso crie um método abstrato deve-se obrigatoriamente cita-lo na classe filho, além de não poder ter corpo;
        }
    }
    
    $carro1=new carro(150,280,4);
    $carro2=new carro(100,180,4);
    $carro3=new carro(88,140,2);
    $carro4=new carro(300,380,4);
            
    echo "<p></p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 22 - Classes Parte 2 (Abstract) </title>
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
