<?php

$counter = 1;

while ($counter <= 10){
    echo "Ini adalah While loop ke-$counter" . PHP_EOL;
    $counter++;
}

// Syntax While Loop
while ($counter <= 10):
    echo "Ini adalah While loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;