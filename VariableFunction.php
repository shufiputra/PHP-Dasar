<?php

function goo()
{
    echo "Goo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionyangakandipanggil = "goo";
$functionyangakandipanggil();

$functionyangakandipanggil = "bar";
$functionyangakandipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Uta", "sampleFunction");
sayHello("Uta", "strtoupper");
sayHello("Uta", "strtolower");