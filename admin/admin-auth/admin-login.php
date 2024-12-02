<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">
    <link href="../../assets/css/loginpage.css" rel="stylesheet">
</head>

<body id="admin-login">
    <nav class="navbar bg-transparent fixed-top shadow-sm py-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../user/user_auth/index.php">
                <i class="bi bi-arrow-left-short text-dark fw-bold" style="font-size: 3.5rem;"></i>
            </a>
        </div>
    </nav>

    <div class="container-fluid form-signin text-center mt-5 pt-5">
        <form id="adminSignInForm" action="../admin-auth/login.php" method="post" class="mt-5" style="background-color:rgba(255, 255, 255, 0.212); backdrop-filter: blur(15px);">
            <img class="img-fluid w-25 mb-4" src="../../assets/image/logo.png" alt="Admin Login Logo">
            <h1 class="h3 mb-2 fw-normal text-light">Admin Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control text-light" id="email" name="email" placeholder="Email" required>
                <label class="text-light fill" for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label class="text-light fill" for="password">Password</label>
            </div>
            <div class="checkbox mb-3 mt-3">
                <label class="text-light"><input type="checkbox" name="remember_me" value="remember-me"> Remember me</label>
            </div>
            <button class="w-100 btn btn-lg btn-dark mt-1" type="submit" name="signIn">Sign in</button>
        </form>
    </div>

    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="errorModalLabel">Error</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modalMessage"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <script src="../../assets/js/loginpage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
