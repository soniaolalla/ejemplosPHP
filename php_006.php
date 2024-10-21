<?php
   // define("CIUDAD", "Madrid"); //La vble ciudad tendrá el valor Madrid.
    if (defined("CIUDAD")){
        print("La ciudad es:". CIUDAD);
    } else{
        print("La constante ciudad no está definida");
    }

