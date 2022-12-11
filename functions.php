<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");



function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $NIM = htmlspecialchars($data["NIM"]);
  $NIM = htmlspecialchars($data["Nama"]);
  $NIM = htmlspecialchars($data["Email"]);
  $NIM = htmlspecialchars($data["Jurusan"]);
  $NIM = htmlspecialchars($data["Gambar"]);

  $query = "INSERT INTO mahasiswa VALUES ('', '$NIM', 'Nama', 'Email', 'Jurusan', 'Gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{

  $namefile = $_FILES['gambar']['name'];
  $ukuranfile = $_FILES['gambar']['size'];
  $eror = $_FILES['gambar']['eror'];
  $tmpName = $_FILES['gambar']['tmpName'];
}

function Delete($id)
{
  global $conn;
  mysqli_query($conn, "DDELETE FROM mahasiswa id = $id");
  return mysqli_affected_rows($conn);
}