<?php

$name = "Muhammad Shufi Putra";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// Konversi ke number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.02";
var_dump($valueFloat);

// mengakses karakter
$name = "uta";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// Variable Parsing
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

// Curly Brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;