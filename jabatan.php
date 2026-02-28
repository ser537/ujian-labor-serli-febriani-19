<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_jabatan_srlifbriani+ ORDER BY id_jabatan DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Jabatan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <?php include('menu.php'); ?>
<div class="container mt-5">
  <h3 class="mb-4">Daftar Jabatan Karyawan</h3>
  <a href="pengguna.php" class="btn btn-secondary mb-3">Kembali ke Pengguna</a>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama Jabatan</th>
        <th>Gaji Pokok</th>
        <th>Tunjangan Jabatan</th>

      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      while($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= htmlspecialchars($row['nama_jabatan']); ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>