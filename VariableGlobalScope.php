<?php

$name = "Uta"; // Global Scope

function sayHello(){
    global $name;  // Global Keyword
    echo $name . PHP_EOL;
    
    echo $GLOBALS ["name"] . PHP_EOL;
}

sayHello(); 