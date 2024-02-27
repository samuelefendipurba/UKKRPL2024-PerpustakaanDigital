<?php
    include '../../koneksi/koneksi.php';

    // Mendapatkan data dari form
    $id = $_POST['idbuku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahunterbit = $_POST['tahunterbit'];

    // Menghandle file upload
    $foto = $_FILES['foto']['name'];
    $buku = $_FILES['buku']['name'];

    // Memindahkan file ke direktori tujuan
    move_uploaded_file($_FILES['foto']['tmp_name'], "../../uploads/".$foto);
    move_uploaded_file($_FILES['buku']['tmp_name'], "../../uploads/".$buku);

    // Query untuk memperbarui data buku
    $query = "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit', foto='$foto', buku='$buku' WHERE IDbuku='$id'";

    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Cek jika query berhasil
    if($result){
        echo "Data buku berhasil diperbarui";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }

    // Kembali ke halaman buku
    header("Location: ../buku.php");
?>
