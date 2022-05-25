<?php

$name = "Uta";
$name = null;
$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Mengecek apakah data null
echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// menghapus variable
$contoh = "Uta";
unset($contoh);

$contoh = "Shufi";
$contoh = null;

var_dump(isset($contoh));