<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
  <header class="bg-primary text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="display-4">Welcome to My Website</h1>
        </div>
        <div class="col-md-6">
          <img src="logoh.png" style="width: 100px;" alt="Hero Image" class="img-fluid">
        </div>
      </div>
    </div>
  </header>
  <?php
  if (!isset($_SESSION)) {
    session_start();
}
  require_once 'auth.php';
  require_once 'header.php';
  ?>
 
  <?php
  require_once 'footer.php';
  ?>
</body>
</html>

</header>