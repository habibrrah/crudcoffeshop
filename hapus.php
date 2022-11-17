<?php
include "koneksi.php";

$id = $_GET['id'];
$sqlhapus = "DELETE FROM pelanggan WHERE id='$id'";
mysqli_query($conn, $sqlhapus);

header("location: index.php");
