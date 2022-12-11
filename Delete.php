<?php

require 'functions.php';

$id = $_GET["id"];

if( Delete($id) > 0 ) {
  echo "
  <script>
  alert('data berhasil diDelete!');
  document.location.href = 'index.php';
  </script> ";
} else {
  echo " 
<script>
alert('data gagal diDelete!');
 document.location.href = 'index.php';
 </script> ";
}