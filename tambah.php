<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Tambah-Data</title>
</head>

<body>
    <label for="nama"></label>
</body>
<div class="w-50 mx-auto border p-3 mt-5">
    <a href="index.php">Kembali</a>
    <form action="tambah.php" method="post">
        <label for="nama">NAMA</label>
        <input type="text" id="nama" name="nama" class="form-control" required>

        <label for="email">EMAIL</label>
        <input type="text" id="email" name="email" class="form-control" required>

        <label for="notelp">NO-TELP</label>
        <input type="text" id="notelp" name="notelp" class="form-control" required>

        <label for="alamat">ALAMAT</label>
        <input type="text" id="alamat" name="alamat" class="form-control" required>

        <label for="Date">WAKTU</label>
        <input type="text" name="date" class="form-control" plcaceholder="Timestamp" disabled value="Timestamp" required />

        <input type="submit" class="btn btn-success mt-3" name="tambah" value="Tambah Data">
    </form>
</div>
<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];

    $sqlInsert = "INSERT INTO pelanggan(nama,email,notelp,alamat) VALUES ('$nama','$email','$notelp','$alamat')";

    mysqli_query($conn, $sqlInsert);

    header("location: index.php");
}
?>

</html>