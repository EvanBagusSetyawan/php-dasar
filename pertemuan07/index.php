<?php

/*
// Variabel Scope / Lingkup Variabel
$x = 10;

function tampilX()
{
  global $x;
  echo $x;
}

tampilX();
*/

// Variabel SuperGlobals
// Variabel Global Milik PHP 
// Merupakan Array Associative

// $_GET
$mahasiswa = [
  [
  "nama" => "Evan Bagus",
  "nrp" => "08080808",
  "Teknik" => "RPL",
  "Email" => "evan@gmail.com",
  "gambar" => "azmi.jfif"
  ],
    [
  "nama" => "abdul",
  "nrp" => "80808080",
  "Teknik" => "RPL",
  "Email" => "abdul@gmail.com",
  "gambar" => "azmi.jfif"
  ],
    [
  "nama" => "royhan",
  "nrp" => "7454746",
  "Teknik" => "RPL",
  "Email" => "roy@gmail.com",
  "gambar" => "gus haidar wp.jfif"
  ]
];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <style type="text/css" media="all">
      body {
        background-color: #75e3ff;
        color: white;
        margin: 50px;
      }
      li {
        font-size: 15px;
      }
    </style>
    <title>Daftar Siswa</title>
  </head>
  <body>
    
    <h1>Daftar Siswa SMKN 8 Jember</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
  <li><a href="index2.php?nama=<?= $mhs['nama'] ?>&nrp=<?= $mhs['nrp'] ?>&teknik=<?= $mhs['Teknik'] ?>&email=<?= $mhs['Email'] ?>&gambar=<?= $mhs['gambar'] ?>"><?= $mhs["nama"]; ?></a></li>
<?php endforeach; ?>
</ul>

  </body>
</html>