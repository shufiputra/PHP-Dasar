<?php

// Tipe Data Number
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111);

echo "Underscore in number : ";
var_dump(1_234_567_897);

// Tipe Data Float
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation minus : ";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_222.234);

// Integer Overflow
echo "Integer Overflow : ";
var_dump(912121421234231234);