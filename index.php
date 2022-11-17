<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>CRUD-COFFESHOP</title>
</head>

<body>

    <div class="container mt-3">
        <h2 class="mt-5">DATA PELANGGAN COFFE SHOP</h2>
        <a href="tambah.php" class="btn btn-primary btn-md mt-5 fw-bold">Tambah Data</a>

        <table class="table table-dark table-striped-columns table-hover table-bordered mt-3">
            <thead class="table-dark">
                <th>ID PELANGGAN</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>NO-TELP</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </thead>
            <?php
            //menampilkan data mysqli
            include 'koneksi.php';
            $no = 0;
            $sqlGet = "SELECT * FROM pelanggan";
            $query = mysqli_query($conn, $sqlGet);

            while ($data = mysqli_fetch_array($query)) {
                $no++;
                echo "
                <tbody>
                    <tr>
                        <td>$data[id]</td>
                        <td>$data[nama]</td>
                        <td>$data[email]</td>
                        <td>$data[notelp]</td>
                        <td>$data[alamat]</td>
                        <td>
                        <div class='row'>
                            <div class='col d-flex justify-content-center'>
                                <a href='update.php?id=$data[id]' class='btn btn-sm btn-warning fw-semibold'>Update</a>
                            </div>
                            <div class='col d-flex justify-content-center'>
                                <a href= 'hapus.php?id=$data[id]' class='btn btn-sm btn-danger fw-semibold'>Delete</a>
                            </div>
                        </div>
                        </td>
                    </tr>
                </tbody> 
                    ";
            }
            ?>
        </table>
    </div>
</body>

</html>