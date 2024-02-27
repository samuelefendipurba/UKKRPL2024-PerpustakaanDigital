<?php
include 'layout/header.php';
?>

<div class="container">
      <?php

      include '../koneksi/koneksi.php';

      $buku = mysqli_query($koneksi, "SELECT * FROM buku");
      $user = mysqli_query($koneksi, "SELECT * FROM user");
      $pinjam = mysqli_query($koneksi, "SELECT * FROM peminjaman");


      $b = mysqli_num_rows($buku);
      $u = mysqli_num_rows($user);
      $p = mysqli_num_rows($pinjam);



      ?>
  <div class="row my-3">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-warning">
          <h2>Data Buku</h2>
          <h1><b><?php echo $b;?></b></h1>
        </div>
        <a href="buku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-success">
          <h2>Data Anggota</h2>
          <h1><b><?php echo $u;?></b></h1>
        </div>
        <a href="anggota.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-success">
          <h2>Data Peminjam</h2>
          <h1><b><?php echo $p;?></b></h1>
        </div>
        <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>
  </div>

  <!-- Welcome Section -->
  <div class="row">
    <div class="col-sm-6" style="margin-top: 5rem;">
      <h2>SELAMAT DATANG</h2>
      <h3>Di Halaman Petugas</h3>
      <h6>Membaca Adalah Jendela Dunia</h6>
    </div>
    <div class="col-sm-6 mt-5">
      <img src="../asset/img/ayo baca.png" width="300" alt="">
    </div>
  </div>
</div>

<?php
include 'layout/footer.php';
?>
