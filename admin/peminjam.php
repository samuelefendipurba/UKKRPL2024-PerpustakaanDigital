<?php
include 'layout/header.php';
?>

<div class="container">
  <div class="row" style="margin-top: 1rem;">
    <div class="col">
      <h2>Data Peminjaman</h2>
      <a href="data/pinjam_buku.php" class="btn btn-success mt-3">Tambah Peminjaman</a>
      <table class="table my-2">
        <thead class="table-success">
          <tr>
            <th scope="col">ID Peminjaman</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Status Peminjaman</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
            while ($d = mysqli_fetch_array($data)) {
          ?>
          <tr>
            <th scope="row"><?php echo $d['IDpeminjaman'];?></th>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['status_peminjaman'];?></td>
            <td>
              <a href="data/detail_peminjaman.php?IDpeminjaman=<?php echo $d['IDpeminjaman'];?>" class="btn btn-primary text-white">Detail</a>
              <a href="#" class="btn btn-warning text-white">Edit</a>
              <a href="#" class="btn btn-danger text-white">Delete</a>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include 'layout/footer.php';
?>
