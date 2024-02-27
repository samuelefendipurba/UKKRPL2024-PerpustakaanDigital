<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>LAPORAN DATA BUKU</h3>
                <h4>APLIKASI PERPUSTAKAAN DIGITAL SMK MTS BATAM</h4>
                <span>Data Ini merupakan data keseluruhan buku perpustakaan</span>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="../laporan.php" class="btn btn-success my-3">Kembali</a>
                <table class="table mb-2">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">ID Buku</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun Terbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../koneksi/koneksi.php';

                        $data = mysqli_query($koneksi, "SELECT * FROM buku");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $d['IDbuku']; ?></th>
                                <td><?php echo $d['judul']; ?></td>
                                <td><?php echo $d['penulis']; ?></td>
                                <td><?php echo $d['penerbit']; ?></td>
                                <td><?php echo $d['tahunterbit']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col my-3">
                <!-- Any additional content can be placed here -->
            </div>
        </div>

        <div class="row">
            <div class="col">
                <br>Mengetahui:
                <p>Kepala Sekolah</p>
                <p class="mt-5"><b>Biden Sinaga, MM</b></p>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
