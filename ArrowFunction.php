<?php

$firstName = "Muhammad";
$lastName = "Shufi";

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();