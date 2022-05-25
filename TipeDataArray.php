<?php

$values = array (12, 2, 3, 5, 6.5);
var_dump($values);

$names = ["Muhammad", "Shufi", "Putra"];
var_dump($names);

// operasi array
// memanggil array
var_dump($names[0]);

// mengubah data array
$names [0] = "Ahmad";
var_dump($names);

// menghapus data array
unset($names[0]);
var_dump($names);

// menambah data array
$names [] = "Lukman";
var_dump($names);

// menghitung jumlah array
var_dump(count($names));

// map menggunakan array diphp
// cara 1
$uta = array(
    "id" => "Muhammad",
    "name" => "Muhammad Shufiputra",
    "age" => 22
);
var_dump($uta);

var_dump($uta["name"]);

// cara 2
$put = [
    "id" => "Muhammad",
    "name" => "Muhammad Shufi",
    "age" => 22
];
var_dump($put);

// menambah array didalam array
$uta = array(
    "id" => "Muhammad",
    "name" => "Muhammad Shufiputra",
    "age" => 22,
    "address" => array(
        "city" => "Tangsel",
        "country" => "Indonesia"
    )
);
var_dump($uta);

var_dump($uta["name"]);
var_dump($uta["address"]["country"]);