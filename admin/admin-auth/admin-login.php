<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">
  <link href="../../assets/css/loginpage.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body id="admin-login">
  <img src="image/bag-hanging-from-furniture-item-indoors.jpg" alt="">

  <nav class="navbar bg-body-tertiary fixed-top shadow-sm py-0">
    <div class="container-fluid">
      <a class="navbar-brand" href="../dashboard.php">
        <button class="btn btn-sm px-1">
          <i class="bi bi-arrow-left-short text-dark fs-1 fw-bold" style="font-size: 1.5rem;"></i>
        </button>
      </a>
      <a class="navbar-brand mx-auto dm-serif-display letter-spacing-1 text-dark d-flex align-items-center" href="#">
        <img class="img-fluid me-2" src="../../assets/image/logo.png" alt="Logo" style="max-width: 40px;">
        Interllux
      </a>
      <p class="navbar-brand">
        <i class="bi bi-arrow-left-short text-light" style="font-size: 1.5rem;"></i>
      </p>
    </div>
  </nav>


  <div class="container-fluid form-signin text-center mt-5 pt-5">
    <!-- Admin Login Form -->
    <form id="adminSignInForm" action="" method="post" class="mt-5" style="background-color:rgba(255, 255, 255, 0.212); backdrop-filter: blur(15px);">
      <img class="img-fluid w-25 mb-4" src="../../assets/image/logo.png" alt="">
      <h1 class="h3 mb-2 fw-normal text-light">Admin Login</h1>

      <?php if (isset($error_message)) {
        echo "<div class='alert alert-danger mt-3'>$error_message</div>";
      } ?>

      <!-- Admin Username and Password -->
      <div class="form-floating">
        <input type="text" class="form-control text-light" id="adminUsername" name="admin_username" placeholder="Admin Username" required>
        <label class="text-light fill" for="adminUsername">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="adminPassword" name="admin_password" placeholder="Password" required>
        <label class="text-light fill" for="adminPassword">Password</label>
      </div>
      <div class="checkbox mb-3 mt-3">
        <label class="text-light"><input type="checkbox" name="remember_me" value="remember-me"> Remember me</label>
      </div>
      <button class="w-100 btn btn-lg btn-dark mt-1" type="submit" name="adminSignIn">Sign in</button>
    </form>

    <script src="../../assets/js/loginpage.js"></script>
</body>

</html>