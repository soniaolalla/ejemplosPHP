<?php
    $var = 7.6;
    print($var);
    print(gettype($var));
    echo "<br>";
    settype($var, "integer");
    print($var);
    print(gettype($var));