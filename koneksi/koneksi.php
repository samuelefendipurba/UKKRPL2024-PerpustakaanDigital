<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "digitalibrary";

    $koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect());
}
    echo "";
?>

