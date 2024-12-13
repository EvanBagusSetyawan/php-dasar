<?php

// Pertemuan 1 And 2 - PHP DASAR

// Kommentar

// Ini Adalah Kommentar
# Ini Adalah Kommentar
/* Ini Kommentar Banyak */

// Standar Output

// echo, print
// print_r
// var_dump

// String

echo "evan bagus <br>";
print "Evan hadrah <br>";
print_r("evan remas <br>");
var_dump("evannnn <br>");

// Bool

echo true, "<br>";
echo false;

// Angka
echo 123, "<br>";

// Penulisan Sintaks PHP

// 1. PHP di dalam HTML
// 2. HTML Di Dalam PHP

// Variable dan Tipe Data

// Variable

// Tidak Boleh Diawali Dengan Angka, Tapi Boleh Mengandung Angka
$nama = "Ale Athallah";

echo "Halo, Nama Saya $nama <br>";
echo 'Halo, Nama Saya $nama <br>';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
  </head>
  <body>
    <h1>Halo Selamat Datang <?php echo $nama; ?></h1>
    <?php 
    echo '<h1>Halo Ale</h1>';
    ?>
  </body>
</html>