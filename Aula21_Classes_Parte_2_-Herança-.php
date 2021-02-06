<!DOCTYPE html>
<?php
    echo "<h1> Aula 21 - Classes Parte 2 (Herança) </h1>";
    echo "<p> Classe com herança é aquela que herda propriedades e métodos de uma outra classe.<br/> Um exemplo é ter um jogo de corrida onde há diversos carros diferentes, porém com certas características em comum que serão herdadas da classe pai </p><br/>";
    
    class aula{
        protected $var1="bom Dia";
        protected $var2="canal@canal.com.br";
        protected $var3="www.cantinhodalaurinha.com.br";
        
        function escreve(){
            echo "<br/> Método da Classe Aula";
            echo "<hr/>".$this->var1;
            echo "<br/>".$this->var2;
            echo "<br/>".$this->var3;
            echo "<hr/>";
        }
    }
    
    echo "<h2> Chamada da Classe Aula direto </h2>";
        $aulaOBJ=new aula();
        $aulaOBJ->escreve();
        
    class canal extends aula{
        var $vc1="curso de PHP";
        var $vc2="Rodolfo";
        
        function escreve2() {
            echo "<br/> Método da Classe Canal";
            echo "<hr/>".$this->vc1;
            echo "<br/>".$this->vc2;
            echo "<hr/>";
        //$this deve ser esado mesmo sendo uma chamada para outra classe
            echo $this->var1;
            echo "<br/>".$this->var2;
            echo "<br/>".$this->var3;            
        }
    }
    
    echo "<h2> Chamada da Classe Canal com herança da Classe Aula direto </h2>";
        $canalOBJ=new canal();
        $canalOBJ->escreve();
        $canalOBJ->escreve2();
    
        echo "<hr/>";
        
        if(isset($aulaOBJ->var3)){
        echo $aulaOBJ->var3;
        }else{
            echo "Variável '$ aulaOBJ->var3' só pode ser acessada da classe específica. para testar, basta mudar para 'var' na declaração das variáveis no escopo da classe";
        }
        
    echo "<p>Propriedade Private: <br/>"
        . "Só podem ser acessadas pela própria classe.<br/>"
        . "Propriedade protected: <br/>"
        . "Possibita que classe herdeira possa acessar o conteúdo da class pai."
            . "</p>";
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 21 - Classes Parte 2 (Herança) </title>
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
