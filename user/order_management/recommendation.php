<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP CSS-->
  <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../../assets/css/catalog.css">

  <!-- BOOTSTRAP ICON LINK -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

  <!--########## WEBSITE TITLE ##########-->
  <title>Thribfty</title>

</head>

<body>
  <div class="container px-4 mt-5">
    <div class="row position-relative">
      <div class="col-4 pe-1 ps-4">
        <hr class="">
      </div>
      <div class="col-4 text-center p-0 mt-1 fs-6s">You May Also Like</div>
      <div class="col-4 ps-1 pe-4">
        <hr>
      </div>
    </div>
  </div>
  <div class="container-fluid">

    <div class="row g-3 mt-3" id="productGrid">
      <!-- Sample Card Structure, repeat as needed -->
      <div class="col-6 col-md-3 product-card">
        <div class="card mb-3 rounded-0">
          <img src="../../assets/image/Alma BB.png" class="card-img-top" alt="Alma BB">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 14px;">Alma BB</h5>
            <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
            <p class="fw-semibold m-1">₱69,999</p>
            <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 product-card" id="productGrid">
        <div class="card mb-3 rounded-0">
          <img src="../../assets/image/Balenciaga City Bag.png" class="card-img-top" alt="Alma BB">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 14px;">Balenciaga</h5>
            <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
            <p class="fw-semibold m-1">₱99,999</p>
            <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 product-card" id="productGrid">
        <div class="card mb-3 rounded-0">
          <img src="../../assets/image/Balmain B-Buzz.png" class="card-img-top" alt="Alma BB">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 14px;">Balmain</h5>
            <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
            <p class="fw-semibold m-1">₱169,999</p>
            <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 product-card" id="productGrid">
        <div class="card mb-3 rounded-0">
          <img src="../../assets/image/Celine Belt Bag.png" class="card-img-top" alt="Alma BB">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 14px;">Celine</h5>
            <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
            <p class="fw-semibold m-1">₱39,999</p>
            <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
          </div>
        </div>
      </div>
      <!-- Repeat cards as needed -->
    </div>

    <div class="text-center mt-3">
      <button id="seeMoreButton" class="btn btn-dark"><a href="../../user/product_catalog/product_catalog.php"
          class="nav-link">See More</a></button>
    </div>
  </div>

  <script src="../../assets/Bootstrap/js/bootstrap.bundle.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const productCards = document.querySelectorAll(".product-card");
      const seeMoreButton = document.getElementById("seeMoreButton");
      const itemsToShowDesktop = 4;
      const itemsToShowMobile = 4;
      let isExpanded = false;

      function updateProductVisibility() {
        const itemsToShow = window.innerWidth >= 768 ? itemsToShowDesktop : itemsToShowMobile;
        productCards.forEach((card, index) => {
          if (isExpanded || index < itemsToShow) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      }

      // Initial visibility setup
      updateProductVisibility();

      // Handle window resize for responsive update
      window.addEventListener("resize", updateProductVisibility);

      // Toggle visibility when "See More" is clicked
      seeMoreButton.addEventListener("click", () => {
        isExpanded = !isExpanded;
        seeMoreButton.textContent = isExpanded ? "See Less" : "See More";
        updateProductVisibility();
      });
    });
  </script>
</body>

</html>