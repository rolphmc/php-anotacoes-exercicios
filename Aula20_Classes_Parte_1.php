<!DOCTYPE html>
<?php
    echo "<h1> Aula 20 - Classes Parte 1 </h1>";
    echo "<p> Classe é um conjunto de variáveis e funções, porém quando se referimos às classes, não nos referimos como propriedades e métodos.<br/> As Variáveis são as Propriedades das Classes <br/> Os métodos são as funções <br/> As classes possibilitam instânciar objetos </p><br/>";
    
    class carro{
        //necessário indicar para a cada classe algumas propriedades
        var $tipo; //1=passeio/ 2=esporte / 3=utilitário 
        var $velMax;
        var $nome;
        var $liga;
        var $vel;
        //Quando dentro de uma classe existe uma function com o mesmo nome da classe, automáticamente essa função se torna o "Construtor".
        function __construct($tp,$no){
            $this->tipo=$tp;
            $this->liga=false;
            $this->nome=$no;
            $this->vel=0;
        //$this-> faz com que o programa entenda que a variável (propriedade) pertence a classe e não a função (método). Lembrar que nesses casos o "$" não pode ser inserido novamente na propriedade.
            if ($tp == 1){
                $this->velMax=160;
            }else if ($tp == 2){
                $this->velMax=300;
            }else{
                $this->velMax=100;
            }
        }
        
        function id(){
            echo "<hr/>";
            echo "Nome do carro: ". $this->nome;
            echo "<br/> Tipo do carro: ".$this->tipo;
            echo "<br/> Velocidade Máxima: ".$this->velMax;
            echo "<br/> Velocidade Atual: ".$this->vel;
            if($this->liga){
                echo "<br/> Este Carro está LIGADO";
            }else{
                echo "<br/>Desligado";
            }
            echo "<hr/>";
        }
        
        function ligar(){
            $this->liga=TRUE;
        }
        
        function desligar(){
            $this->liga=FALSE;
        }
        
        Function velocidade ($vl){
            if($vl > $this->velMax){
                $this->vel= $this->velMax;
            }else{
                $this->vel=$vl;
            }
        }
    }
    
    $carro1=new carro(2,"Rapid");
    $carro2=new carro(3, "Carregador");
    $carro3=new carro(1, "Basic");
    $carro4=new carro(2, "Veloz");
    $carro5=new carro(2,"Flecha");
    
    $carro1->ligar();
    $carro3->ligar();
    $carro5->ligar();
    
    $carro5->velocidade(200);
    
    $carro3->desligar();
    
    $carro1->id();
    $carro2->id();
    $carro3->id();
    $carro4->id();
    $carro5->id();
    
        
    echo "<p>ATENÇÃO... As informações e detalhes dessa aula estão em sua maioria inseridas em comentários no próprio código!<br/> Sempre se atentar nos comandos condicionais que depois do 'Else' caso necessite de um novo 'if' <font color=blue> usa-se as chaves após essa nova condição<font>.</p>";
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 20 - Classes Parte 1 </title>
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
