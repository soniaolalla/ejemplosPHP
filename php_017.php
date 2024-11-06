<?php
//Operadores lógicos
//TRUE equivale a 1 y FALSE equivale a 0
//AND (&& o and): devuelve true si ambas expresiones son verdaderas.
//OR (|| o or): devuelve true si al menos una de la expresiones es verdadera.
//NOT (!): Invierte el valor lógico de una expresión. 

$a = 5; //true porque es distinta de 0
$b = 0; //false
$c = 10; //verdadero

//AND lógico (&&). Devuelve true si ambos operadores son ciertos
echo "AND lógico (&&): <br>";
// echo (int)($a && $b) ."<br>";
// echo ($a && $c). "<br>";
if ($a && $b){
    echo "Es true";
}else{
    echo "Es false";
}
//con operador ternario
$result = ($a && $b) ? "Es true" : "Es false";
echo $result."<br>";

//OR (||). Es true si al menos uno de los operandos es true
echo "OR lógico (||): <br>";
echo ($a || $b) . "<br>";
echo ($a || $c) . "<br>";
echo (int)($b || 0). "<br>";

//NOT (!). Invierte el valor lógico
echo "NOT lógico (!): <br>";
echo $a."<br>";
echo (int)(!$a)."<br>";

//Para casa: Utilizar if para || y para !.