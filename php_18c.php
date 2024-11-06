<?php
$a = 20;
$b = 20;

if ($a > $b){
    print("A es mayor que B y vale. ". $a);
}else{
   if($a < $b){
    print("B es mayor que A y vale ". $b);
   }else{
    print("A y B son iguales, y su valor es:  ". $b);
   }
}

//con elseif. Más común.
if ($a > $b){
    print("A es mayor que B y vale. ". $a);
}elseif ($a <$b){
    print("B es mayor que A y vale ". $b);
}else{
    print("A y B son iguales, y su valor es:  ". $b);
}

