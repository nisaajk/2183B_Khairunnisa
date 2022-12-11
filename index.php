<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Admin</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="50" autofocus placeholder="Masukan Keyword Pencarian">
    <button type="submit" name="search">search</button>


  </form>

  <br>
  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="">Change</a>
        <a href="">Delete</a>
      </td>
      <td><img src="img/<?php echo $row["Gambar"]; ?>" width="100"></td>
      <td><?= $row["NIM"]; ?> </td>
      <td><?= $row["Nama"] ?> </td>
      <td><?= $row["Email"] ?> </td>
      <td><?= $row["Jurusan"] ?> </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>

</body>

</html>