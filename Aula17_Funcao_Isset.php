<!DOCTYPE html>
<?php
    echo "<h1> Aula 17  - Função Isset</h1>";
    echo "<p> Função tem por finalidade indicar se uma variável ou um objeto foi definido dentro do PHP<br/>"
    . "Anotações:<br/>"
            . "Função Isset retorna um valor boorlean <br/>"
            . ""
            . "</p><br/>";
        
    $aula="";
    
    echo "<h2> Verificação de uma variável através de uma condicional</h2><hr/>";
    if (isset($aula)){
        echo "<font color='geen'>Variável aula foi definida</font>";
    }else{
        echo "<font color='red'>Variável aula não definida</font>";
    }
    echo "<hr/>";
    
    echo "<p><h3>Atenção:</h3></p><p>Nulo é diferente de Vazio<br/> Variável declarada mas não definida também é considerada nula<br/></p>";
    echo "<font color='blue'> Uma observação Interessante é que tanto o código html quanto o php podem se mescrar em um unico documento como pode se notar neste. <br/>A condicional IF é aberta e fechada em outra instância após o código HTML.</font>";
    
    echo "<h2> Verificar se um nome foi submetido à um formulário </h2><hr/>";
    if(isset($_POST["f_nome"])){
        $vnome = $_POST["f_nome"];
        echo "Nome: $vnome";
    }else{
        echo "Dados Não Submetidos";
    
    echo "<hr/>"
?>

<html>
    <body>
        <form name="""f_aula" method="post" action="aula17_Funcao_Isset.php">
            <label>Nome:</label><br/>
            <input type="text" name="f_nome"/><br/>
            <input id="c_submit" type="submit" value="Enviar"/>
            
            <style>
                input#c_submit {
                    margin-top: 10px;
                }
            </style>
        </form>
    </body>
</html>
<?php 
    }
?>
<html>
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 17  - Função Isset </title>
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
</html>