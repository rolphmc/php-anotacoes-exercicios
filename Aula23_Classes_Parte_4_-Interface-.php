<!DOCTYPE html>
<?php
    echo "<h1> Aula 23 - Classes Parte 4 (Interface) </h1>";
    echo "<p> Interface tem um conceito parecido a classes abstratas, porém a interface serve apenas para rascunho para outras classes. Detalhe importante é que pode-se inclementar várias interfaces em apenas uma classe, diferente da abstrata que é uma classe herdeira, seria o mesmo que um guia para criação de criação da definição de outras classes </p><br/>";
        
    interface carroPadrão{
        function liga();
        function desliga();
        function status();
        function acelera();
        function freia();
    }
    
    interface carroGerra{
        function atiraCanhao();
        function atiraMetralhadora();
    }

    abstract class carroBase implements carroPadrão, carroGerra {
        public $potencia;
        public $velMax;
        public $ligado=false;
        
        function liga() {
            $this->ligado=TRUE;
        }
        
        function desliga() {
            $this->ligado=FALSE;
        }
        
        function status() {
            echo "<hr/>";
            echo "potencia: ".$this->potencia."<br/>";
            echo "Velocidade Máxima: ".$this->velMax."<br/>";
            if($this->ligado){
                echo "Veículo Ligado";
            }else{
                echo "Veículo Desligado";
            }
            echo "<hr/>";
        }
        
        function acelera() {
            ;
        }
        
        function freia() {
            ;
        }
        
        function atiraCanhao() {
            ;
        }
        
        function atiraMetralhadora() {
            ;
        }
    }

    class carro extends carroBase{
        function __construct($pt,$ve) {
            $this->potencia=$pt;
            $this->velMax=$ve;
            $this->status();
            $this->liga();
        }
    }
    
    $carro1=new Carro(150,280);
    
    $carro1->liga();
    //$carro1->status();
    
    echo "<p> A interface faz com que não seja possivel executar uma classe sem que todos os métodos estejam claramente determinados, caso contrário o programa completo não será executado</p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 23 - Classes Parte 4 (Interface) </title>
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
