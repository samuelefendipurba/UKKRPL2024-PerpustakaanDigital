<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>LAPORAN DATA ANGGOTA</h3>
                <h4>APLIKASI PERPUSTAKAAN DIGITAL SMK MTS BATAM</h4>
                <span>Data Ini merupakan data keseluruhan member perpustakaan</span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../laporan.php" class="btn btn-success my-3">Kembali</a>
            </div>
        </div>

        <div class="row">
            <div class="col my-3">
                <table class="table">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">ID User</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../koneksi/koneksi.php';

                        $data = mysqli_query($koneksi, "SELECT * FROM user");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $d['IDuser']; ?></th>
                                <td><?php echo $d['nis']; ?></td>
                                <td><?php echo $d['namalengkap']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['username']; ?></td>
                                <td><?php echo $d['password']; ?></td>
                                <td><?php echo $d['level']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <br>Mengetahui:</br>
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
