<?php

echo 'Name : ';
echo 'Muhammad ShufiPutra';
echo "\n";

echo "Name : ";
echo "Muhammad\t Shufi\t Putra\n";

// Multiline String
echo <<<UTA
Ini adalah contoh string yang sangat
Panjang, dan juga gak perlu ngetik ENTER secara
manual, bisa menggunakan Heredoc

UTA;

echo <<<'UTA'
Ini adalah contoh string yang sangat
Panjang, dan juga gak perlu ngetik ENTER secara
manual, bisa menggunakan Nowdoc
UTA;