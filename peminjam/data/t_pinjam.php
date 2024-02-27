<?php
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$IDbuku                 = $_POST['IDbuku'];
$IDuser                 = $_POST['IDuser'];
$nama                   = $_POST['nama'];
$tgl_peminjaman         = $_POST['tgl_peminjaman'];
$tgl_pengembalian       = $_POST['tgl_pengembalian'];
$status_peminjaman      = $_POST['status_peminjaman'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into peminjaman(IDbuku,IDuser,nama,tgl_peminjaman,tgl_pengembalian,status_peminjaman) 
									values('$IDbuku','$IDuser','$nama','$tgl_peminjaman','$tgl_pengembalian','$status_peminjaman')");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
?>