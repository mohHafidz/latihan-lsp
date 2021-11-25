<?php
session_start();
if(!isset($_SESSION['submit'])){
  header('location: login.php');
}
require 'function.php';

if(isset($_POST['logout'])){
  session_destroy();
  session_unset();
  header("location: login.php");
}

$result = query("SELECT * FROM daftar_siswa"); 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container">
      <br>
      
      <h1>tabel siswa</h1>
      <br>
      <form action="" method="post">
        <button class="btn btn-danger" id="logout" name="logout">logout</button>
      </form>
      <a href="tambah.php" class="btn btn-success">tambah</a>
    <table class="table">
    <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">NIS</th>
      <th scope="col">nama</th>
      <th scope="col">kelas</th>
      <th scope="col">jurusan</th>
      <th scope="col">alamat</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
    <?php 
    $no = 1;
    ?>
  <?php foreach ($result as $row) : ?>
  <tbody>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $row['NIS'] ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['kelas'] ?></td>
      <td><?= $row['jurusan'] ?></td>
      <td><?= $row['alamat'] ?></td>
      <td>
          <a href="hapus.php?id=<?= $row['ID'] ?>" class="btn btn-danger">hapus</a>
          <a href="edit.php?id=<?= $row['ID'] ?>" class="btn btn-primary">edit</a>
      </td>
    </tr>
  </tbody>
  <?php $no++; ?>
  <?php endforeach; ?>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
