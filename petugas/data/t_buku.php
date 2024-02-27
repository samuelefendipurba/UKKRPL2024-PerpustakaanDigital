<?php
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang dikirim dari form
$judul       = $_POST['judul'];
$penulis     = $_POST['penulis'];
$penerbit    = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];
$foto        = $_FILES['foto']['name'];
$buku        = $_FILES['buku']['name'];
$file_foto   = $_FILES['foto']['tmp_name'];
$file_buku   = $_FILES['buku']['tmp_name'];
 
// mengupload file ke direktori
move_uploaded_file($file_foto, '../asset/sampul/' . $foto);
move_uploaded_file($file_buku, '../asset/buku/' . $buku);

// menyimpan data ke database
mysqli_query($koneksi, "INSERT INTO buku (judul, penulis, penerbit, tahunterbit, foto, buku)
                        VALUES ('$judul', '$penulis', '$penerbit', '$tahunterbit', '$foto', '$buku')");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
?>
