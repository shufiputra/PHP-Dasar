<?php

function createName()
{
    $name = "Uta"; // local scope
}

createName();
echo $name . PHP_EOL; // Error