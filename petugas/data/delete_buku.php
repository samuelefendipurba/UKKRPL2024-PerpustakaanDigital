<?php
include '../../koneksi/koneksi.php';

if (isset($_GET['idbuku'])) {
    $id = $_GET['idbuku'];

    // Delete the record from the database
    $delete_query = mysqli_query($koneksi, "DELETE FROM buku WHERE IDbuku='$id'");

    if ($delete_query) {
        // If deletion is successful, redirect back to the data_buku.php page
        header("Location:../buku.php");
        exit();
    } else {
        // If deletion fails, display an error message
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    // If 'idbuku' is not set in the URL, redirect back to the data_buku.php page
    header("Location: ../buku.php");
    exit();
}
?>
