<?php

// Tanpa For Each
$names = ["Muhammad", "Shufi", "Putra"];

for($i = 0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

// pakai for each
$names = ["Muhammad", "Shufi", "Putra"];

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

// For Each dengan Key
$person = [
    "First_Name" => "Muhammad",
    "Middle_Name" => "Shufi",
    "Last_Name" => "Putra"
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}