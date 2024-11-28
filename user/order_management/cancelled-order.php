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

    <title>Cancelled Order</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar bg-body-tertiary fixed-top shadow-sm py-0">
        <div class="container-fluid">
            <!-- Left Arrow Icon -->
            <a class="navbar-brand" href="order.php">
                <button class="btn btn-sm px-1">
                    <i class="bi bi-arrow-left-short text-dark fs-1 fw-bold" style="font-size: 1.5rem;"></i>
                </button>
            </a>

            <!-- Navbar Brand Name Centered -->
            <a class="navbar-brand  mx-auto dm-serif-display letter-spacing-1 text-dark" href="#">
                <img src="../../assets/image/logo.png" alt="Interllux Logo" width="30" height="24">
                Interllux
            </a>
            <p class="navbar-brand">
                <i class="bi bi-arrow-left-short text-light" style="font-size: 1.5rem;"></i>
            </p>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- CANCELLED ORDER ITEMS -->
    <div class="container-fluid text-light  mt-md-4 mt-3 pt-5">
        <div class="row mb-3 bg-secondary py-2 pt-4 text-center">
            <h5 class="fw-bold">Order Cancelled</h5>
            <p>Your order has been cancelled. Please check the details below.</p>
        </div>
    </div>
    <hr class="w-100">
    <div class="container mt-4 vh-100">
        <div class="row">
            <div class="col-12">
                <div class="card d-flex flex-row p-2">
                    <img src="../../assets/image/Classic Flap Bag.png" class="img-fluid" alt="Classic Flap Bag"
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div class="card-body text-start p-0 ps-2 mt-2">
                        <p class="product-name fw-bold mb-0">Classic Flap Bag.</p>
                        <p class="mb-3">Color: Black</p>

                        <button type="button" class="view-order-btn btn btn-sm p-1"><u class="fw-bold">
                                <a href="details-to-rate.php" class="text-dark">
                                    View Order</u>
                            </a></button>

                    </div>
                    <div class="card-body p-0 pe-2 text-end price-info">
                        <p class="m-0 fw-bold">Waiting for Seller</p>
                        <p class="m-0 mt-4">Quantity: ×1</p>
                        <p class="m-0 mt-1 fw-bold">Php.900</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div id="footer">
        <script src="../../assets/js/footer.js"></script>
    </div>
</body>

</html>