<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Uta", "strtoupper");
sayHello("Uta", "strtolower");
sayHello("Uta", function (string $name): string {
    return strtoupper($name);
});
sayHello("Uta", fn($name) => strtoupper($name));