<!DOCTYPE html>

<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">

  <!-- BOOTSTRAP ICON -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- FONT AWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Order Details</title>

</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar bg-body-tertiary fixed-top shadow-sm py-0">
    <div class="container-fluid">
      <!-- Left Arrow Icon -->
      <a class="navbar-brand" href="tracker.php#shipped">
        <button class="btn btn-sm px-1">
          <i class="bi bi-arrow-left-short text-dark fs-1 fw-bold" style="font-size: 1.5rem;"></i>
        </button>
      </a>

      <!-- Navbar Brand Name Centered -->
      <a class="navbar-brand  mx-auto dm-serif-display letter-spacing-1 text-dark" href="../../user/user_auth/index.php">
        <img src="../../assets/image/logo.png" alt="Interllux Logo" width="30" height="24">
        Interllux
      </a>
      <p class="navbar-brand">
        <i class="bi bi-arrow-left-short text-light" style="font-size: 1.5rem;"></i>
      </p>
    </div>
  </nav>
  <!-- END NAVBAR -->

  <div class="container-fluid mt-5 pt-4">
    <!-- STATUS -->
    <div class="card mb-3">
      <div class="card-header bg-dark text-light">
        Completed
      </div>
    </div>

    <!-- SHIPPING DETAILS -->
    <div class="card mb-3">
      <div class="card-header bg-dark text-light">
        Shipping Details
      </div>
      <div class="card-body">
        <div class="card-text mb-2"><strong>Recipient: </strong>John Lester Montejo</div>
        <div class="card-text mb-2"><strong>Contact: </strong>(+63)9123456789</div>
        <div class="card-text mb-2"><strong>Address: </strong>Commonwealth Avenue, Batasan Hills, Quezon City,
          Metro Manila, 1126, Philippines</div>
      </div>
    </div>
    <!-- PRODUCT DETAILS -->
    <div class="card mb-3">



      <div class="card-header bg-dark text-light">
        Product Details
      </div>
      <div class="card-body" id="product-details">
        <!-- Product details will be injected here -->
      </div>
    </div>

    <!-- ORDER Summary -->

    <div class="card mb-3">


      <div class="card-header bg-dark text-light">

        Order Summary
      </div>
      <div class="card-body mb-3">
        <div class="d-flex justify-content-between">
          <p><strong>Subtotal: </strong></p>
          <p id="subtotal">Php.0.00</p> <!-- Ensure this ID is correct -->
        </div>
        <div class="d-flex justify-content-between">
          <p><strong>Shipping Fee: </strong></p>
          <p>Php.55.00</p> <!-- Static value for shipping fee -->
        </div>
        <hr>
        <div class="d-flex justify-content-between">
          <p><strong>Total: </strong></p>
          <p id="total">Php.0.00</p> <!-- Ensure this ID is correct -->
        </div>
      </div>
    </div>

    <!-- ORDER INFORMATION -->
    <div class="card mb-3">
      <div class="card-header bg-dark text-light">
        Order Information
      </div>
      <div class="card-body mb-3">
        <p><strong>Order Number: </strong>#ORD002</p>
        <p><strong>Order Date: </strong>2024-09-16</p>
        <p><strong>Payment Method: </strong>E-wallet</p>
        <p><strong>Shipment Date: </strong>2024-09-17</p>
        <p><strong>Shipping Method: </strong>LBC</p>
        <p><strong>Tracking Number: </strong>TRK667788990PH</p>
        <p><strong>Email: </strong>johnlester@example.com</p>
      </div>
    </div>

    <!-- TRACKING UPDATES -->
    <div class="card mb-3">
      <div class="card-header bg-dark text-light">
        Order Details
      </div>
      <div class="card-body mb-3">
        <ul>
          <li><strong>Order Placed: </strong>Pending</li>
          <li><strong>To Ship: </strong>Payment Confirmation</li>
          <li><strong>In Transit: </strong>Out For Delivery</li>
          <li><strong>Completed: </strong>Delivered</li>

        </ul>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const reviewDetails = JSON.parse(localStorage.getItem('reviewDetails')); // Corrected key

      if (reviewDetails) {
        const reviewDetailsContainer = document.getElementById('product-details');

        reviewDetailsContainer.innerHTML = `
      <div class="card d-flex flex-row p-2">
        <img src="${reviewDetails.image}" class="img-fluid" alt="${reviewDetails.name}"
          style="width: 100px; height: 100px; object-fit: cover;">
        <div class="card-body text-start p-0 ps-2 mt-2">
          <p class="product-name fw-bold mb-0">${reviewDetails.name}</p> <!-- Corrected variable -->
          <p class="mb-1">Color: ${reviewDetails.color}</p>
          <p class="mb-3">Quantity: ${reviewDetails.quantity}</p>
        </div>
        <div class="card-body p-0 pe-2 text-end price-info">
          <p class="m-0 fw-bold">${reviewDetails.status}</p>
          <p class="m-0 mt-5 fw-bold">${reviewDetails.price}</p>
        </div>
      </div>`;

        // Parse the price to get the numeric value
        const price = parseFloat(reviewDetails.price.replace('Php.', '').replace(',', ''));
        const quantity = reviewDetails.quantity;
        const shippingFee = 55.00; // Flat shipping fee
        const subtotal = price * quantity;
        const total = subtotal + shippingFee;

        // Update the Subtotal and Total in the Order Summary
        document.getElementById('subtotal').textContent = `Php.${subtotal.toFixed(2)}`;
        document.getElementById('total').textContent = `Php.${total.toFixed(2)}`;
      } else {
        console.log('No product details found.');
      }
    });
  </script>
</body>

</html>