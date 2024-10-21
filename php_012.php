<?php
    //funcion isset
    //Comprueba si una variable está configurada, es decir, está declarada y no es NULL. En este caso devuelve 1
    //En caso contrario devuelve 0.
    //$var1 = 4;
    if(isset($var1)){
        print("La variable var1 está inicializada y no es NULL. Su valor es: ".$var1);
    }else{
        print("La variabla var1 no está configurada");

    }