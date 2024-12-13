<?php

$mahasiswa = [
  ["Ale", "0363646373", "Teknik RPL", "ale@gmail.com"],
  ["Bryan", "67474664", "Teknik TKJ", "bryan@gmail.com"],
  ["Ilham", "7454746", "Teknik TKR", "ilham@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Daftar Siswa</title>
  </head>
  <body>
    
    <h1>Daftar Siswa SMKN 8 JEMBER</h1>
    
<?php foreach($mahasiswa as $mhs) : ?>
<ul>
  <li>Nama : <?= $mhs[0] ?></li>
  <li>NRP : <?= $mhs[1] ?></li>
  <li>Teknik : <?= $mhs[2] ?></li>
  <li>Email : <?= $mhs[3] ?></li>
</ul>
<?php endforeach; ?>

  </body>
</html>