<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pertemuan 3</title>
</head>

<body>
  <?php 
      echo"<h2>Tutorial Mendesain Fitur Power Point Supaya Menarik</h2>";
      echo ("Selamat Bertutorial<br>");
      echo "Saya Sedang Tutorial Mendesain Fitur Power Point Supaya Menarik<br>";
      echo "Nama","Saya","Annisaa","Nisa","Ica";
   ?>

  <?php
      print "<h2>Tutorial Mendesain Power Point Untuk Pemula</h2>";
      print "Selamat Bertutorial<br>";
      print "Selamat Bertutorial Mendesain Power Point";
   ?>

  <?php
      $namadepan = "Annisaa Azizatul Munawaroh";
      $namablkg = "Nisa";
      $ttl = "Tangerang, 12 April 2001";
      $jeniskelamin = "Perempuan";
      $agama = "Islam";
      $fakultas = "Teknik Informatika";
      $mk = "Desain Fitur";
      $hobi = "Melukis";
      $alamat = "Rajeg";
      $hp = "081213305286";
   ?>

  <h4>Biodata diri</h4>
  <p>Nama : <?php echo $namadepan ." ". $namablkg ; ?></p>
  <p>Tanggal Lahir : <?php echo (23112002) ; $ttl; ?></p>
  <p>Jenis Kelamin : <?php echo $jeniskelamin ; ?></p>
  <p>Agama : <?php echo $agama ; ?></p>
  <p>Fakultas : <?php echo $fakultas ; ?></p>
  <p>Mata Kuliah : <?php echo $mk ; ?></p>
  <p>Hobi : <?php echo $hobi ; ?></p>
  <p>Alamat : <?php echo $alamat ; ?></p>
  <p>Hp : <?php echo $hp ; ?></p>
</body>

</html>