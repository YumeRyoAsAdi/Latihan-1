<?php
require_once 'config.php';

$query = "SELECT * FROM Tabel_Pegawai";
$result = mysqli_query($conn, $query);

if (!$result) {
  echo "Error: " . mysqli_error($conn);
  exit;
}
?>

<html>
<head>
  <title>Employee List</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Employee List</h1>
    <table class="table">
      <thead>
        <tr>
          <th>NIK</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>No. Tlp</th>
          <th>Jabatan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
  <?php while ($pegawai = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $pegawai['Nik'] ?></td>
          <td><?php echo $pegawai['Nama'] ?></td>
          <td><?php echo $pegawai['Alamat'] ?></td>
          <td><?php echo $pegawai['Jenis_Kelamin'] ?></td>
          <td><?php echo $pegawai['No_tlp'] ?></td>
          <td><?php echo $pegawai['Jabatan'] ?></td>
          <td>
            <a href="edit.php?id=<?php echo $pegawai['Id'] ?>" class="btn btn-primary">Edit</a>
            <a href="delete.php?id=<?php echo $pegawai['Id'] ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
  </div>
</body>
</html>
