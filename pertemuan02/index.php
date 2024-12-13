<?php
// Operator

// Aritmatika

// + - * / %
$x = 10;
$y = 50;
echo $x * $y;

// Penggabung String / Concatenation / concat 

// .
$nama_depan = "evan";
$nama_belakang = "Bagus";
echo $nama_depan . " ". $nama_belakang;

// Assignment
// =, -=, +=, *=, /=, %=, .=

$x = 1;
$x += 5;
echo $x;
echo "<br>";

$nama = "evan";
$nama .= " ";
$nama .= "Bagus";
echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=


var_dump(1 < 5);
echo "<br>";
var_dump(1 > 5);
echo "<br>";
var_dump(1 == 5);
echo "<br>";
var_dump(1 > "1");
echo "<br>";
var_dump(1 != 5);
echo "<br>";


// Identitas
// ===, !==,
var_dump(1 === '1');
echo "<br>";

// Logika
// &&, ||, !

$x = 30;
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";

$x = 30;
var_dump($x < 20 || $x % 2 == 0);
echo "<br>";
