<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>

  <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../assets/css/cart/payment.css">
</head>

<style>
  .cart-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
  }

  .cart-item img {
    width: 50px;
    /* Adjust size as needed */
    height: auto;
    margin-right: 10px;
  }

  .cart-item .item-name {
    flex: 1;
    /* Allows the name to take up available space */
    font-size: 0.9rem;
    /* Adjust font size if needed */
    margin: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .cart-item .item-quantity {
    flex-shrink: 0;
    /* Prevents it from shrinking */
    margin-left: 10px;
    font-weight: bold;
  }
</style>

<body class="bg-body-tertiary">

  <!-- NAVBAR -->
  <nav class="navbar fixed-top bg-light shadow-sm">
    <!-- NAVBAR CONTAINER -->
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div>
        <a class="navbar-brand" href="../../user/product_catalog/product_catalog.php">
          <button class="btn btn-sm px-1">
            <i class="bi bi-arrow-left-short text-dark fs-1 fw-bold" style="font-size: 1.5rem;"></i>
          </button>
        </a>
      </div>

      <div class="me-5">
        <a class="navbar-brand me-0 dm-serif-display letter-spacing-1 text-dark " href="../../user/user_auth/index.php">
          <img src="../../assets/image/logo.png" alt="Interllux Logo" width="30" height="24">
          Interllux
        </a>
      </div>



      <div class="d-flex bg-light" >

      </div>

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
    <!-- END COLLAPSE SEARCH BAR -->
  </nav>
  <!-- END NAVBAR -->



  <!-- MAIN CONTAINER -->
  <div class="container">
    <div class="row g-3 mt-5 pt-4">

      <!-- CART ITEMS SECTION (LEFT) -->
      <div class="col-md-5 col-lg-4 cart-right">
        <div id="cart-items">
          <div class="cart-item">
            <div class="d-flex">
              <img src="../../assets/image/Balmain B-Buzz.png" alt="Product Image" class="img-fluid">
              <p class="item-name">Birkin 30 Graphite Matte Alligator</p>
            </div>
          </div>
          <div class="item-details">
            <div class="total-container mt-3">
              <div>
                <p>Subtotal</p>
                <p id="subtotal">₱2,900,000.00</p>
              </div>
              <div>
                <p>Shipping fee</p>
                <p>₱0</p>
              </div>
              <div class="total">
                <h4>TOTAL</h4>
                <h4 id="total-amount">₱2,900,000.00</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BILLING FORM (RIGHT) -->
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Delivery</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" required>
              <div class="invalid-feedback">Valid first name is required.</div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" required>
              <div class="invalid-feedback">Valid last name is required.</div>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
              <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">Please enter your shipping address.</div>
            </div>

            <div class="col-md-6">
              <label for="barangay" class="form-label">Barangay</label>
              <input type="text" class="form-control" id="barangay" required>
              <div class="invalid-feedback">Please enter your barangay.</div>
            </div>
            <div class="col-md-6">
              <label for="city" class="form-label">City</label>
              <select id="city" class="form-select" aria-label="City">
                <option value="">Select City...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="province" class="form-label">Province</label>
              <select id="province" class="form-select" aria-label="Province" onchange="populateCityDropdown()">
                <option value="">Select Province...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="region" class="form-label">Region</label>
              <select id="region" class="form-select" aria-label="Region" onchange="populateProvinceDropdown()">
                <option value="">Select Region...</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="country" class="form-label">Country</label>
              <select id="country" class="form-select" aria-label="Country">
                <option value="">Select Country...</option>
                <option value="Philippines">Philippines</option>
              </select>
            </div>
            <div class="col-md-4 position-relative">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" required>
              <div class="invalid-tooltip">Please provide a valid zip.</div>
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>
          <p>All transactions are secure and encrypted.</p>
          <div class="note">
            An Interllux agent will contact you shortly for payment instructions. For faster transactions, you can
            directly WhatsApp us: +63 961 619 5710.
          </div>
          <div class="my-3">
            <div class="form-check">
              <input id="online-banking" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="online-banking">Online Banking</label>
            </div>
            <div class="form-check">
              <input id="e-wallet" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="e-wallet">E-wallet</label>
            </div>
          </div>

          <hr class="my-4">

          <div class="checkout">
            <button class="btn btn-dark btn-lg checkout-button" type="submit">Continue to checkout</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- AFTER CHECKOUT BUTTON -->
  <div class="overlay" id="overlay"></div>
  <div id="checking">
    <span>Are you sure you want to checkout this item?</span>
    <div class="button-container">
      <button class="confirm" onclick="confirmCheckout()">Yes</button>
      <button class="unconfirm" onclick="closePopup()">No</button>
    </div>
  </div>

  <!-- Footer -->
  <div id="footer">
    <script src="../../assets/js/footer.js"></script>
  </div>

  <script src="../../assets/Bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../../assets/js/checkout.js"></script>

</body>

</html>