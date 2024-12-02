<?php
include '../../database/dbconnect.php';
session_start();

$first_name = "Guest"; // Default to 'Guest'

if (isset($_SESSION['id'])) {
  try {
    $stmt = $pdo->prepare("SELECT user_firstname FROM users WHERE id = :id");
    $stmt->execute(['id' => $_SESSION['id']]);
    $user = $stmt->fetch();

    if ($user && !empty($user['user_firstname'])) {
      $first_name = $user['user_firstname'];
    }
  } catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../../assets/css/navbar.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
  <title>Interllux</title>
</head>

<body>
<nav class="navbar fixed-top bg-light shadow-sm">
  <div class="container-fluid d-flex position-relative">
    <div class="d-flex">
      <button class="navbar-toggler border-0 m-0 px-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideNav" aria-controls="sideNav">
        <span class="bi bi-filter-left fs-1 ms-1 ms-lg-0"></span>
      </button>
    </div>
    
    <div class="position-absolute w-100 text-center">
      <a class="navbar-brand dm-serif-display letter-spacing-1 text-dark" href="../../user/user_auth/index.php">
        <img src="../../assets/image/logo.png" alt="Interllux Logo" width="30" height="24">
        Interllux
      </a>
    </div>

    <div class="d-flex justify-content-center align-items-center me-md-3 position-relative">
      <!-- Desktop View Dropdown -->
      <?php if ($first_name !== "Guest") : ?>
        <div class="dropdown d-lg-block">
          <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo htmlspecialchars($first_name); ?>
          </button>
          <div class="w-100 position-relative">
            <ul class="dropdown-menu dropdown-menu-center mt-3" style="left: 50%; transform: translateX(-50%);">
            <li><a class="dropdown-item text-dark" href="../../user/order_management/dashboard.php">Dashboard</a></li>
              <li><a class="dropdown-item text-dark" href="../../user/user_auth/account-details.php">My Account</a></li>
              <li><a class="dropdown-item text-dark" href="../../user/order_management/tracker.php">Orders</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-dark" href="../../user/user_auth/logout.php" id="logout">Log Out</a></li>
            </ul>
          </div>
        </div>
      <?php else : ?>
        <a href="../../user/user_auth/loginpage.php" class="btn btn-dark" id="loginButton">Login</a>
      <?php endif; ?>

      <!-- Notification Bell Icon (Only shows when user is logged in) -->
      <?php if ($first_name !== "Guest") : ?>
        <a href="#" class="text-decoration-none mt-0 mx-3">
          <i class="fa fa-bell-o fs-5 text-dark"></i>
        </a>
      <?php endif; ?>

      <!-- Cart Icon -->
      <a href="../../user/order_management/add-to-cart.php" class="text-decoration-none mx-3 pt-0">
        <i class="bi bi-cart2 fs-5 text-dark"></i>
      </a>

      <!-- Search Icon -->
      <a href="#" class="text-decoration-none mt-0 mx-3" data-bs-toggle="collapse" data-bs-target="#searchCollapse" aria-expanded="false" aria-controls="searchCollapse">
        <i class="bi bi-search fs-5 text-dark"></i>
      </a>
    </div>
  </div>

  <!-- Collapsible Search Section -->
  <div class="collapse bg-light w-100" id="searchCollapse" style="position: absolute; top: 56px; left: 0; z-index: 1050;">
  <div class="container-fluid p-2">
    <form action="../../user/product_catalog/search.php" method="get" class="input-group">
      <input type="text"
        name="search"
        class="form-control border-secondary border-start-0 border-top-0 border-end-0 rounded-0 shadow-none"
        placeholder="Search here" 
        aria-label="Search"
        required>
      <button class="btn btn-dark ms-2 mt-0" type="submit" data-bs-toggle="collapse"
        data-bs-target="#searchCollapse" aria-controls="searchCollapse" >Search </button>
    </form>
  </div>
</div>

</nav>


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
        <?php if ($first_name !== "Guest") : ?>
          <li><a href="../../user/order_management/order.php" class="text-dark text-decoration-none letter-spacing-1">My Orders</a></li>
        <?php endif; ?>
        <li><a href="../../user/user_auth/contact-us.php" class="text-dark text-decoration-none letter-spacing-1">Contact Us</a></li>
        <li><a href="../../user/user_auth/about-us.php" class="text-dark text-decoration-none letter-spacing-1">About Us</a></li>
      </ul>
    </div>
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const closeSearchButton = document.querySelector('#closeSearch');
    const searchCollapse = document.querySelector('#searchCollapse');

    if (closeSearchButton) {
      closeSearchButton.addEventListener('click', function() {
        searchCollapse.classList.remove('show'); // Hide the search bar

        const collapseInstance = bootstrap.Collapse.getInstance(searchCollapse);
        if (collapseInstance) {
          collapseInstance.hide();
        }
      });
    }
  });
</script>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const logoutLink = document.querySelector('#logout');
      const loginButton = document.querySelector('#loginButton');

      if (logoutLink) {
        logoutLink.addEventListener('click', function(event) {
          event.preventDefault();

          fetch(this.href)
            .then(() => {
              // Update UI after session destruction
              const dropdownToggle = document.querySelector('.btn.dropdown-toggle');
              if (dropdownToggle) {
                dropdownToggle.textContent = 'Login';
                dropdownToggle.classList.remove('dropdown-toggle');
                dropdownToggle.setAttribute('href', '../../user/user_auth/loginpage.php');
              }

              // Update mobile and desktop login
              if (loginButton) {
                loginButton.style.display = 'block';
              }
            })
            .catch(err => console.error('Logout error:', err));
        });
      }
    });
  </script>

  <script src="../../assets/Bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../../assets/js/navbar.js"></script>
</body>

</html>
