<?php

/*
 $mahasiswa = [
  ["Ale", "0363646373", "Teknik RPL", "ale@gmail.com"],
  ["Bryan", "67474664", "Teknik TKJ", "bryan@gmail.com"],
  ["Ilham", "7454746", "Teknik TKR", "ilham@gmail.com"],
]; */

// Array Associative 
// definisinya sama seperti array numerik, kecuali
// Key-nya Adalah String Yang Kita Buat Sendiri
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
        background-color: #004a5d;
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
    
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
<li>
  <img src="img/<?= $mhs["gambar"]; ?>" width="100px" height="100px">
</li>
<li>NAMA : <?= $mhs["nama"] ?></li>
<li>NRP : <?= $mhs["nrp"] ?></li>
<li>TEKNIK : <?= $mhs["Teknik"] ?></li>
<li>EMAIL : <?= $mhs["Email"] ?></li>
    </ul>
<?php endforeach; ?>
    
  </body>
</html>