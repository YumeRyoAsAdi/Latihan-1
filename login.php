<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];

  $query = "SELECT * FROM Tabel_Pegawai WHERE Nik = '$nik' AND Nama = '$nama'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $pegawai = mysqli_fetch_assoc($result);
    $_SESSION['nik'] = $pegawai['Nik'];
    $_SESSION['nama'] = $pegawai['Nama'];
    header('Location: home.php'); // redirect to home.php
    exit;
  } else {
    $error = 'Invalid NIK or Nama';
  }
}
?>

<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css"> <!-- link to external CSS file -->
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #f7f7f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="Logoh.png"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">LOGIN HERE</h4>
                  </div>

                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <p>Please login to your account</p>

                    <div class="form-outline mb-4">
                      <input type="text" id="nik" name="nik" class="form-control" required
                        placeholder="NIK" />
                      <label class="form-label" for="nik">NIK</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="nama" name="nama" class="form-control" required
                        placeholder="Nama" />
                      <label class="form-label" for="nama">Nama</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit">Login</button>
                    </div>

                    <?php if (isset($error)) { ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                      </div>
                    <?php } ?>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">I'm just student</h4>
                <p class="small mb-0">Im just a student who learn about programing.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>