<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP CSS-->
  <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../../assets/css/navbar.css">
  <link rel="stylesheet" href="../../assets/css/cart/style.css">

  <!-- BOOTSTRAP ICON LINK -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- FONT AWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
  <title>Interllux</title>
</head>

<body>
  <!--########### NAV BAR ############-->
  <nav class="navbar fixed-top bg-light shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div>
        <button class="navbar-toggler border-0 m-0 px-0 shadow-none" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#sideNav" aria-controls="sideNav">
          <span class="bi bi-filter-left fs-2"></span>
        </button>
      </div>

      <div class="ms-4">
        <a class="navbar-brand me-0 dm-serif-display letter-spacing-1 text-dark " href="../../user/user_auth/index.php">
          <img src="../../assets/image/logo.png" alt="Interllux Logo" width="30" height="24">
          Interllux
        </a>
      </div>

      <div class="d-flex justify-content-center align-items-center me-md-3">
        <a class="text-dark text-decoration-none pt-0" style="margin-top: 3px;" href="../../user/user_auth/loginpage.php">
          <i class="bi bi-person fs-4"></i>
        </a>
        <a href="../../user/order_management/add-to-cart.php" class="text-decoration-none mx-3 pt-0">
          <i class="bi bi-cart2 fs-5 text-dark"></i>
        </a>
        <a href="#" class="text-decoration-none mt-0" style="margin-top: 5px;" data-bs-toggle="collapse" data-bs-target="#searchCollapse"
          aria-expanded="false" aria-controls="searchCollapse">
          <i class="bi bi-search fs-5 text-dark"></i>
        </a>
      </div>
    </div>

    <!-- Full-width Collapsible Search Bar -->
    <div class="collapse bg-body-light w-100 mt-1" id="searchCollapse">
      <div class="container-fluid p-2">
        <div class="input-group">
          <input type="text"
            class="form-control border-secondary border-start-0 border-top-0 border-end-0 rounded-0 shadow-none"
            placeholder="Search here" aria-label="Search">
          <button class="btn btn-close btn-sm shadow-none ms-2 mt-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#searchCollapse" aria-controls="searchCollapse" aria-label="Close"></button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Off-canvas Menu on the Left -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sideNav" aria-labelledby="sideNavLabel">
    <div class="offcanvas-header d-flex justify-content-center align-items-center">
      <img src="../../assets/image/logo.png" alt="Interllux Logo" width="30" height="24">
      <h4 class="offcanvas-title text-center flex-grow-1 dm-serif-display letter-spacing-1" id="sideNavLabel">
        Interllux
      </h4>
      <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body position-relative">
      <ul class="list-unstyled">
        <li><a href="../../user/user_auth/index.php" class="text-dark text-decoration-none letter-spacing-1">Home</a></li>
        <li><a href="../../user/product_catalog/product_catalog.php" class="text-dark text-decoration-none letter-spacing-1">Products</a></li>
        <li><a href="../../user/order_management/review.php" class="text-dark text-decoration-none letter-spacing-1">Customer Reviews</a></li>
        <li><a href="../../user/order_management/order.php" class="text-dark text-decoration-none letter-spacing-1">My Orders</a></li>
        <li><a href="../../user/user_auth/contact-us.php" class="text-dark text-decoration-none letter-spacing-1">Contact Us</a></li>
        <li><a href="../../user/user_auth/about-us.php" class="text-dark text-decoration-none letter-spacing-1">About Us</a></li>
      </ul>
    </div>
  </div>

  <!-- BOOTSTRAP JS -->
  <script src="../../assets/Bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../../assets/js/navbar.js"></script>
</body>

</html>