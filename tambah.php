<?php
require 'functions.php';

if (isset($_POST["submit"])) {


  if (tambah($_POST) > 0) {
    echo "
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script> ";
  } else {
    echo " 
  <script>
  alert('data gagal ditambahkan!');
   document.location.href = 'index.php';
   </script> ";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>

  <form action="" method="post">
    <ul>
      <li>
        <label for="NIM">NIM : </label>
        <input type="text" name="NIM" id="NIM" required>
      </li>
      <li>
        <label for="Nama">Nama : </label>
        <input type="text" name="Nama" id="Nama" required>
      </li>
      <li>
        <label for="Email">Email : </label>
        <input type="text" name="Email" id="Email" required>
      </li>
      <li>
        <label for="Jurusan">Jurusan : </label>
        <input type="text" name="Jurusan" id="Jurusan" required>
      </li>
      <li>
        <label for="Gambar">Gambar : </label>
        <input type="text" name="Gambar" id="Gambar">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>

  </form>

</body>

</html>