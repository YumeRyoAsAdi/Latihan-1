<?php
require_once 'config.php';

if (isset($_POST['nik'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : ''; // Check if the key exists
  $no_tlp = $_POST['no_tlp'];
  $jabatan = $_POST['jabatan'];

  // Check connection
  if ($conn) {
    $query = "INSERT INTO Tabel_Pegawai (Nik, Nama, Alamat, Jenis_kelamin, No_tlp, Jabatan) VALUES ('$nik', '$nama', '$alamat', '$jenis_kelamin', '$no_tlp', '$jabatan')";
    if (mysqli_query($conn, $query)) {
      echo "Data berhasil disimpan!";
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  } else {
    echo "Error: Unable to connect to database";
  }
}
?>

<!-- rest of the HTML code -->
<html>
<head>
  <title>Register Employee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Register Employee</h1>
    <form action="register.php" method="post">
      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="number" class="form-control" id="nik" name="nik" placeholder="Enter NIK">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat"></textarea>
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="no_tlp">No. Tlp</label>
        <input type="number" class="form-control" id="no_tlp" name="no_tlp" placeholder="Enter No. Tlp">
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Enter Jabatan">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
</body>
</html>
