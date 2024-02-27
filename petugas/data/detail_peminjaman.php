<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 5rem;">
    <div class="card">
        <div class="row m-4">
            <?php
            include '../../koneksi/koneksi.php';
            if (isset($_GET['IDpeminjaman'])) {
                $IDpeminjaman = $_GET['IDpeminjaman'];
            } else {
                die("Error, Data Tidak Ditemukan");
            }
            $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE IDpeminjaman='$IDpeminjaman' ");
            $result = mysqli_fetch_array($query);
            ?>

            <div class="col">
                <h2>Detail Peminjam</h2>
                <a href="../peminjam.php" class="btn btn-danger">Kembali</a><hr>
                <table>
                    <tr>
                        <td><h5>ID Peminjaman</h5></td>
                        <td><h6>: <?php echo $result['IDpeminjaman'];?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>ID User</h5></td>
                        <td><h6>: <?php echo $result['IDuser'];?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>ID Buku</h5></td>
                        <td><h6>: <?php echo $result['IDbuku'];?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>Nama Peminjam</h5></td>
                        <td><h6>: <?php echo $result['nama'];?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Peminjaman</h5></td>
                        <td><h6>: <?php echo $result['tgl_peminjaman'];?></h6></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Pengembalian</h5></td>
                        <td><h6>: <?php echo $result['tgl_pengembalian'];?></h6></td>
                    </tr>
                    <tr class="bg-warning text-white">
                        <td><h5>Status Peminjaman</h5></td>
                        <td><h6>: <?php echo $result['status_peminjaman'];?></h6></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
