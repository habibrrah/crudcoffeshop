<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";

$id = $_GET['id'];
$sqlGet = "SELECT * FROM pelanggan WHERE id = '$id'";
$queryGet = mysqli_query($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);
?>
<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];

    $sqlUpdate = "UPDATE pelanggan SET nama = '$nama',email ='$email',notelp ='$notelp',alamat ='$alamat' WHERE id = $id";
    $queryUpdate = mysqli_query($conn, $sqlUpdate);

    header("location: index.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Tambah-Data</title>
</head>

<body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="index.php">Kembali</a>

        <form action="update.php" method="post">
            <label for="nama">NAMA</label>
            <input type="text" id="nama" name="nama" value="<?php echo "$data[nama]" ?>" class="form-control" required>

            <label for="email">EMAIL</label>
            <input type="text" id="email" name="email" value="<?php echo "$data[email]" ?>" class="form-control" required>

            <label for="notelp">NO-TELP</label>
            <input type="text" id="notelp" name="notelp" value="<?php echo "$data[notelp]" ?>" class="form-control" required>

            <label for="alamat">ALAMAT</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo "$data[alamat]" ?>" class="form-control" required>

            <input type="hidden" name="id" value=<?php echo $data['id']; ?>>
            <input type="submit" class="btn btn-success mt-3" name="update" value="Update">
        </form>
    </div>



</body>

</html>