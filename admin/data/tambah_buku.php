<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card" style="margin-top: 2rem;">
            <div class="row m-4">

                <div class="col-sm-7">
                    <h3>Form Tambah Buku</h3>
                    <a href="../buku.php" class="btn btn-danger my-2">Kembali</a>
                    <form action="t_buku.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" required aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control" required aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit</label>
                                    <input type="text" name="penerbit" class="form-control" required
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                                    <input type="text" name="tahunterbit" class="form-control" required
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Upload Sampul</label>
                            <input type="file" name="foto" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="mb-3">
                            <label for="fileBuku" class="form-label">Upload Buku <span class="text-danger">*pdf</span></label>
                            <input type="file" name="buku" class="form-control" id="inputGroupFile02">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
