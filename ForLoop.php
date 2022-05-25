<?php

// Perulangan tanpa henti
// for (; ; ){
//     echo "Ini adalah For loop" . PHP_EOL;
// }

// Perulangan dengan kondisi
// $counter = 1;
// for (; $counter <= 10 ; ){
//     echo "Ini adalah For loop ke-$counter" . PHP_EOL;
//     $counter++;
// }

// Perulangan dengan init statement
// for ($counter = 1 ; $counter <= 10 ; ){
//     echo "Ini adalah For loop ke-$counter" . PHP_EOL;
//     $counter++;
// }

// Perulangan dengan post statement
// for ($counter = 1 ; $counter <= 10 ; $counter++){
//     echo "Ini adalah For loop ke-$counter" . PHP_EOL;
// }

// syntax alternative for loop
for ($counter = 1 ; $counter <= 10 ; $counter++):
    echo "Ini adalah For loop ke-$counter" . PHP_EOL;
endfor;

for ($counter = 10 ; $counter >= 1 ; $counter--):
    echo "Ini adalah For loop ke-$counter" . PHP_EOL;
endfor;