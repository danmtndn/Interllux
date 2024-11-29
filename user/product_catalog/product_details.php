<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Product Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../../assets/css/cart/style.css">

    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        .product-image {
            width: 70%;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar bg-body-tertiary fixed-top shadow-sm py-0">
        <div class="container-fluid">
            <!-- Left Arrow Icon -->
            <a class="navbar-brand" href="../../user/product_catalog/product_catalog.php">
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

    <div class="product-container">
        <div class="product-image text-center d-flex flex-row align-items-start justify-content-center">
            <!-- Main Product Image -->
            <img id="main-product-image" src="../../assets/image/Alma BB.png" alt="Product Image" class="img-fluid mb-3">
            <!-- Thumbnails for additional images -->
            <div class="thumbnail-container m-0 d-flex flex-wrap justify-content-center gap-2">
                <img src="../../assets/image/Alma BB.png" alt="Thumbnail 1" class="thumbnail img-thumbnail" onclick="changeMainImage('img/product1.jpg')">
                <img src="../../assets/image/Alma BB.png" alt="Thumbnail 2" class="thumbnail img-thumbnail" onclick="changeMainImage('img/product2.jpg')">
                <img src="../../assets/image/Alma BB.png" alt="Thumbnail 3" class="thumbnail img-thumbnail" onclick="changeMainImage('img/product3.jpg')">
                <img src="../../assets/image/Alma BB.png" alt="Thumbnail 4" class="thumbnail img-thumbnail" onclick="changeMainImage('img/product1.jpg')">
                <img src="../../assets/image/Alma BB.png" alt="Thumbnail 5" class="thumbnail img-thumbnail" onclick="changeMainImage('img/product2.jpg')">
                <img src="../../assets/image/Alma BB.png" alt="Thumbnail 6" class="thumbnail img-thumbnail" onclick="changeMainImage('img/product3.jpg')">
            </div>
        </div>
        <div class="product-info">
            <h1 class="brand-name">Hermes</h1>
            <h2 class="product-name">
                Birkin 30 Graphite Matte<br>
                Alligator in Gold Hardware Stamp X
            </h2>
            <p class="product-price">₱ 2,900,000.00</p>
            <hr><!-- Horizontal line to break the layout -->
            <div class="product-description">
                <h3>Product Details<br><br></h3>
                <p>
                    Birkin 30 Graphite Matte Alligator in Gold Hardware Stamp X <br><br>

                    ✨Php 2,900,000<br>

                    CONDITION: Good as New (plastic protector on the hardware intact)<br><br><br>

                    RATING: 10/10<br><br>

                    INCLUSIONS: dust bag, lock & keys, box, care booklet, rain coat, copy of store receipt and
                    CITES<br><br><br>

                    💯% Authenticity Money back guarantee<br><br><br>

                    Free shipping within Metro Manila
                    Additional shipping charges for provincial deliveries<br><br><br>

                    As all sales are final, buyers are advised to review all photos and conditions prior to
                    purchase.<br><br><br>

                    Disclaimer: Purse Maison is not affiliated with the brands featured. All trademarks and copyrights
                    remains sole property to the brands.
                </p>
            </div>

            <div class="action-section">
                <button class="addtocart-button" data-product-id="hermes-birkin">ADD TO CART</button>
                <!-- Help Section -->
                <div class="help-section">
                    <h5>Need Help?</h5>
                    <br>
                    <p>Chat via WhatsApp: <a href="tel:+639616195710" class="text-dark">+639616195710</a></p><br>
                    <p>WhatsApp: <a href="https://wa.me/639616195710" target="_blank" class="text-dark">Interllux WhatsApp Link</a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <script src="../../assets/js/footer.js"></script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>

</html>