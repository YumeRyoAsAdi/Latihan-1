<?php
require_once 'auth.php';
require_once 'header.php';
?>

<main class="login-page">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Welcome, <?php echo $_SESSION['nama']; ?>!</h1>
            <p class="card-text">This is the home page.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
require_once 'footer.php';
?>