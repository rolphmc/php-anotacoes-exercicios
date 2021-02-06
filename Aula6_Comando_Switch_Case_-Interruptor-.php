<!DOCTYPE html>
<?php
    echo "<h1>Aula 6 - Comando Switch Case (Interruptor)</h1>";
    echo "<p> O uso do switch serve para seleção de infromações prédeterminadas </p>";
    $opc=4; //1:Carro - 2:Moto - 3:Bicicleta - 4:Navio - 5:Avião
    
    switch ($opc){
        case 1:
            echo 'Carro';
            break;
        case 2:
            echo 'Moto';
            break;
        case 3:
            echo 'Bicibleta';
            break;
        case 4:
            echo 'Navio';
            break;
        case 5:
            echo 'Avião';
            break;
        default:
            echo 'Transporte Inválido';
            break;
    }
    echo "<p> Sempre Usar 'break ao final de cada 'case' <br/> Para opções não listadas, usar o 'Default'</p><hr/>";
    switch ($opc){
        case($opc <= 3 && $opc > 0);
            echo '<font color = green>Transporte Terrestre</font>';
            break;
        case 4:
            echo '<font color = yellow>Transporte Marítimo</font>';
            break;
        case 5:
            echo '<font color = red>Transporte Aéreo</font>';
            
    }  
    
?>

<html>
    
    <head>
        <meta charset ="UTF-8"/>
	<title> Aula 6 - Comando Switch Case </title>
        <style>
            p {
                color: #ff0000;
                margin-top: 5px;
                margin-bottom: 5px;
            }           
        </style>
        <title></title>
    </head>
    <body>
        
    </body>
</html>

