<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Muhammad");
$sayHello("Shufi");

// Anonymous Function sebagai Argument
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Uta", function (string $name): string {
    return strtoupper($name);
});

$sayPanggil = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Uta", $sayPanggil);

// mengakses variable diluar
$firstName = "Muhammad";
$lastName = "Shufi";

$sayHelloUta = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloUta();