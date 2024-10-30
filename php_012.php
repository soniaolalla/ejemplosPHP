<?php
    //funcion isset. Devuelve 1 si esta definida la vble. 0 en caso contrario
    //Comprueba si una variable está definida y no es NULL
    //El valor NULL respresenta una variale SIN VALOR.
    $var1 = 4;
    if(isset($var1)){
        print("La variable var1 está inicializada y no es NULL. Su valor es: ".$var1);
    }else{
        print("La variabla var1 no está configurada");
    }
    echo "<br>";
    $var2 = null;
    if(isset($var2)){
        print("La variable var2 está inicializada y no es NULL. Su valor es: ".$var2);
    }else{
        print("La variabla var2 no está definida y su valor es NULL");
    }