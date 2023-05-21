<?php

function calculadora($num1,$num2,$operator){
    switch ($operator){
        case "Suma":
            return $num1 + $num2;
            break;
        case "Resta":
            return $num1 - $num2;
            break;
        case "Multiplicacion":
            return $num1 * $num2;
            break;
        case "Division":
            if($num2 == 0){
                return "No se puede dividir por 0";
            } else {
                return $num1 / $num2;
            }   
             break;
           default:
             return "Operador invalido";
             break;  
    }
}

if ($_POST){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    echo "<p>Resultado: ". calculadora($num1, $num2, $operator)."</p>";
}





?>