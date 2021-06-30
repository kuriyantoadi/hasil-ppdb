<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PPDB SMKN 1 Ciruas</title>
  </head>
  <body>
    <div class="container">
      <center>
        <h2 style="margin-top: 20px">Pengumuman Hasil Penerimaan Peserta Didik Baru</h2>
        <h2 style="margin-bottom: 40px">SMK Negeri 1 Ciruas</h2>
      </center>

      <table class="table table-bordered table-hover" id="example">
        <thead>
        <tr>
          <th>
            <center>No
          </th>
          <th>
            <center>No Pendaftaran
          </th>
          <th>
            <center>NISN
          </th>
          <th>
            <center>Nama Lengkap
          </th>
          <th>
            <center>Asal Sekolah
          </th>
          <th>
            <center>Diterima Pilihan (1/2)
          </th>
          <!-- <th>
            <center>Jalur Seleksi
          </th> -->
        </tr>
      </thead>

      <?php
      $no=1;
      include('koneksi.php');
      $data = mysqli_query($koneksi, "SELECT * from tb_siswa ");
      while ($d = mysqli_fetch_array($data)) {
       ?>

        <tr>
          <td><center><?= $no++ ?></td>
          <td><center><?= $d['no_daftar'] ?></td>
          <td><center><?= $d['nisn_siswa'] ?></td>
          <td><center><?= $d['nama_siswa'] ?></td>
          <td><center><?= $d['asal_sekolah'] ?></td>
          <td><center>
            <span class="badge bg-success"><?= $d['diterima_pil'] ?></span>
          </td>
        </tr>

        <?php } ?>
      </table>

<?php include 'footer.php' ?>
