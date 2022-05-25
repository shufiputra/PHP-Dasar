<?php

// function sayHello($name)
// {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello("Uta");
// sayHello("Budi");

// // Default Argument Value
function sayHello($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Uta");
sayHello("Budi");
sayHello();

// Type Declaration
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

// Variable length Argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);