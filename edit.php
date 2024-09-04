<?php
require_once 'config.php';

$id = $_GET['id'];

$query = "SELECT * FROM Tabel_Pegawai WHERE Id = '$id'";
$result = mysqli_query($conn, $query);
$pegawai = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $no_tlp = $_POST['no_tlp'];
  $jabatan = $_POST['jabatan'];

  $query = "UPDATE Tabel_Pegawai SET Nik = '$nik', Nama = '$nama', Alamat = '$alamat', Jenis_kelamin = '$jenis_kelamin', No_tlp = '$no_tlp', Jabatan = '$jabatan' WHERE Id = '$id'";
  mysqli_query($conn, $query);
  echo "Data berhasil diupdate!";
  header("Location: pegawai.php");
}
?>

<html>
<head>
  <title>Edit Employee</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Edit Employee</h1>
    <form action="edit.php?id=<?php echo $id ?>" method="post">
      <div class="form-group">
        <label for="nik">NIK</label>
        <input type="number" class="form-control" id="nik" name="nik" value="<?php echo $pegawai['Nik'] ?>">
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pegawai['Nama'] ?>">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat"><?php echo $pegawai['Alamat'] ?></textarea>
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
          <option value="Laki-laki" <?php if ($pegawai['Jenis_Kelamin'] == 'Laki-laki') echo 'selected' ?>>Laki-laki</option>
          <option value="Perempuan" <?php if ($pegawai['Jenis_Kelamin'] == 'Perempuan') echo 'selected' ?>>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="no_tlp">No. Tlp</label>
        <input type="number" class="form-control" id="no_tlp" name="no_tlp" value="<?php echo $pegawai['No_tlp'] ?>">
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $pegawai['Jabatan'] ?>">
      </div>
      <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
  </div>
</body>
</html>
