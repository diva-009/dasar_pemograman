<?php
$conn = mysqli_connect("localhost", "root", "", "db_dpw");
$result = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Daftar Mahasiswa</h2>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Semester</th>
      <th>Prodi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <td><?= $row['id_mhs']; ?></td>
      <td><?= $row['nim']; ?></td>
      <td><?= $row['nama_mhs']; ?></td>
      <td><?= $row['semester']; ?></td>
      <td><?= $row['prodi']; ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
  <br><a href="index.php">Kembali</a>
</body>
</html>