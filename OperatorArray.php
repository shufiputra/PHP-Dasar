<?php

// Union
$first = [
    "first_name" => "Muhammad"
];

$last = [
    "last_name" => "Shufi"
];

$full = $first + $last;
var_dump($full);

// Equal dan Identity
$a = [
    "first_name" => "Muhammad",
    "last_name" => "Shufi"
];

$b = [
    "last_name" => "Shufi",
    "first_name" => "Muhammad"
];

var_dump($a == $b); //Equal
var_dump($a === $b); //Identity