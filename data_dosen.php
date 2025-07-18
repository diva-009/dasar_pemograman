<?php
$conn = mysqli_connect("localhost", "root", "", "db_dpw");
$result = mysqli_query($conn, "SELECT * FROM tb_dosen");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Dosen</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Daftar Dosen</h2>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Nama Dosen</th>
      <th>Mata Kuliah</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <td><?= $row['id_dosen']; ?></td>
      <td><?= $row['nama_dosen']; ?></td>
      <td><?= $row['mata_kuliah']; ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
  <br><a href="index.php">Kembali</a>
</body>
</html>