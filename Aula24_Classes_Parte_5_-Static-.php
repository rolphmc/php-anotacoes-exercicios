<!DOCTYPE html>
<?php
    echo "<h1> Aula 24 - Classes Parte 5 (Static) </h1>";
    echo "<p> A propriedade Static Pertence as Classes e não aos Objetos, ou seja, teremos uma propriedade que vale para todos os objetos criados por aquela classe.<br/> Diferente das outras propriedades publicas que ao serem usadas, elas se modificam para cada objeto, trazendo-lhes caracteristicas unicas, entretanto todos as propriedades apontadas como static, modificara todos os objetos pertencentes aquelas classes.</p><br/>";
        
    class carro {
        public $cor;
        public static $vel=0;
        
        function __construct($cr) {
            $this->cor=$cr;
            self::$vel=0;
        }
        
        function mudaVel ($vl){
            self::$vel=$vl;
        }
                
        function status(){
            echo "<hr/>";
            echo "Cor: ".$this->cor;
            echo "<br/> Velocidade: ".self::$vel;
            echo "<hr/>";
        }
    }
    
    $carro1=new carro("vermelho");
    $carro2=new carro("Verde");
    $carro3=new carro("Azul");
    
    $carro1->status();
    $carro2->status();
    $carro3->status();
    
    echo "<h2>Velocidade Alterada</h2>";
    $carro1->mudaVel(100);

    $carro1->status();
    $carro2->status();
    $carro3->status();
    
    
    echo "<p>  </p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 24 - Classes Parte 5 (Static) </title>
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
