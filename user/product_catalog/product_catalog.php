<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../../assets/css/product_catalog.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
  <title>Thrifty</title>
  <style>
    /* CSS for smooth transition */
    .product-card {
      transition: opacity 3s ease, max-height 3s ease;
      overflow: hidden;
      opacity: 1;
      max-height: 500px;
      /* Adjust as needed */
    }

    .product-card.hidden {
      opacity: 0;
      max-height: 0;
      pointer-events: none;
    }

    .product-card:hover {
      cursor: pointer;
    }
  </style>
</head>

<body>

  <div id="navbar">
    <script src="../../assets/js/navbar.js"></script>
  </div>

  <div class="container-fluid mt-5 pt-2">
    <!-- Sorting -->
    <div class="row position-fixed bg-light pb-2 pt-3 z-3 w-100">
      <div class="col-12 d-flex justify-content-center  gap-2 ">
        <!-- Sort By Dropdown -->
        <select id="sortOptions" class="form-select w-auto rounded-0 shadow-none border-black" aria-label="Sort By">
          <option value="default" selected>Sort By</option>
          <option value="price-asc">Price: Low to High</option>
          <option value="price-desc">Price: High to Low</option>
        </select>

        <!-- Filter by Brand Dropdown -->
        <select id="brandFilter" class="form-select w-auto rounded-0 shadow-none border-black" aria-label="Filter by Brand">
          <option value="all" selected>All Brands</option>
          <option value="Alma BB">Alma BB</option>
          <option value="Balenciaga">Balenciaga</option>
          <option value="Balmain">Balmain</option>
          <option value="Celine">Celine</option>
          <option value="Chanel">Chanel</option>
          <option value="Chloe">Chloe</option>
          <option value="Burberry">Burberry</option>
          <option value="Dior">Dior</option>
          <option value="Gucci">Gucci</option>
          <option value="Hermes">Hermes</option>
        </select>
      </div>
    </div>

    <div class="row g-3 mt-5 pt-5" id="productGrid">
      <!-- Sample Card Structure, repeat as needed -->
      <div class="col-6 col-md-3 product-card" data-brand="Alma BB">
        <div class="card mb-3 rounded-0">
          <a href="product_details.php" class="card-link nav-link text-dark">
            <img src="../../assets/image/Alma BB.png" class="card-img-top" alt="Alma BB">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 14px;">Alma BB</h5>
              <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
              <p class="fw-semibold m-1">₱69,999</p>
          </a>
          <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Balenciaga">

      <div class="card mb-3 rounded-0">
        <a href="product_details.php" class="card-link nav-link text-dark">
          <img src="../../assets/image/Balenciaga City Bag.png" class="card-img-top" alt="Alma BB">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 14px;">Balenciaga</h5>
            <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
            <p class="fw-semibold m-1">₱99,999</p>
        </a>
        <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
      </div>
    </div>

  </div>
  <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Balmain">

    <div class="card mb-3 rounded-0">
      <a href="product_details.php" class="card-link nav-link text-dark">
        <img src="../../assets/image/Balmain B-Buzz.png" class="card-img-top" alt="Alma BB">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 14px;">Balmain</h5>
          <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
          <p class="fw-semibold m-1">₱169,999</p>
      </a>
      <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
    </div>
  </div>
  </div>
  <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Celine">

    <div class="card mb-3 rounded-0">
      <a href="product_details.php" class="card-link nav-link text-dark">
        <img src="../../assets/image/Celine Belt Bag.png" class="card-img-top" alt="Alma BB">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 14px;">Celine</h5>
          <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
          <p class="fw-semibold m-1">₱39,999</p>
      </a>
      <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
    </div>
  </div>
  </div>
  <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Chanel">

    <div class="card mb-3 rounded-0">
      <a href="product_details.php" class="card-link nav-link text-dark">
        <img src="../../assets/image/Chanel Gabrielle.png" class="card-img-top" alt="Alma BB">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 14px;">Chanel</h5>
          <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
          <p class="fw-semibold m-1">₱109,999</p>
      </a>
      <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
    </div>
  </div>

  </div>
  <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Chloe">

    <div class="card mb-3 rounded-0">
      <a href="product_details.php" class="card-link nav-link text-dark">
        <img src="../../assets/image/Chloe Faye.png" class="card-img-top" alt="Alma BB">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 14px;">Chloe</h5>
          <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
          <p class="fw-semibold m-1">₱29,999</p>
      </a>
      <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
    </div>
  </div>

  </div>
  <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Burberry">

    <div class="card mb-3 rounded-0">
      <a href="product_details.php" class="card-link nav-link text-dark">
        <img src="../../assets/image/Burberry TB Bag.png" class="card-img-top" alt="Alma BB">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 14px;">Burberry</h5>
          <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
          <p class="fw-semibold m-1">₱89,999</p>
      </a>
      <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
    </div>
  </div>

  </div>
  <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Dior">

    <div class="card mb-3 rounded-0">
      <a href="product_details.php" class="card-link nav-link text-dark">
        <img src="../../assets/image/Dior Saddle Bag.png" class="card-img-top" alt="Alma BB">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 14px;">Dior</h5>
          <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
          <p class="fw-semibold m-1">₱269,999</p>
      </a>
      <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
    </div>
  </div>

  </div>
  <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Gucci">

    <div class="card mb-3 rounded-0">
      <a href="product_details.php" class="card-link nav-link text-dark">
        <img src="../../assets/image/Gucci Dionysus.png" class="card-img-top" alt="Alma BB">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 14px;">Gucci</h5>
          <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
          <p class="fw-semibold m-1">₱569,999</p>
      </a>
      <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
    </div>
  </div>
  </div>
  <div class="col-6 col-md-3 product-card" id="productGrid" data-brand="Hermes">

    <div class="card mb-3 rounded-0">
      <a href="product_details.php" class="card-link nav-link text-dark">
        <img src="../../assets/image/Hermes Birkin 30.png" class="card-img-top" alt="Alma BB">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 14px;">Hermes</h5>
          <p class="card-text">A stylish and elegant bag perfect for everyday use.</p>
          <p class="fw-semibold m-1">₱169,999</p>
      </a>
      <button class="btn btn-dark btn-add mt-3">Add to Cart</button>
    </div>
  </div>

  </div>
  <!-- Repeat cards as needed -->
  </div>

  <div class="text-center mt-3">
    <button id="seeMoreButton" class="btn btn-dark">See More</button>
  </div>
  </div>

  <div id="footer">
    <script src="../../assets/js/footer.js"></script>
  </div>

  <script src="../../assets/Bootstrap/js/bootstrap.bundle.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const productCards = Array.from(document.querySelectorAll(".product-card"));
      const sortOptions = document.getElementById("sortOptions");
      const brandFilter = document.getElementById("brandFilter");
      const seeMoreButton = document.getElementById("seeMoreButton");
      const itemsToShowDesktop = 8;
      const itemsToShowMobile = 4;
      let isExpanded = false;

      // Sorting Functionality
      sortOptions.addEventListener("change", function() {
        let sortedCards;

        switch (sortOptions.value) {
          case "price-asc":
            sortedCards = productCards.sort((a, b) => getPrice(a) - getPrice(b));
            break;
          case "price-desc":
            sortedCards = productCards.sort((a, b) => getPrice(b) - getPrice(a));
            break;
          default:
            sortedCards = productCards;
        }

        const productGrid = document.getElementById("productGrid");
        productGrid.innerHTML = "";
        sortedCards.forEach(card => productGrid.appendChild(card));
        updateProductVisibility();
      });

      // Brand Filtering Functionality
      brandFilter.addEventListener("change", function() {
        const selectedBrand = brandFilter.value;

        productCards.forEach(card => {
          const brand = card.getAttribute("data-brand");
          card.style.display = (selectedBrand === "all" || brand === selectedBrand) ? "block" : "none";
        });
      });

      // Helper function to get price from a card
      function getPrice(card) {
        const priceText = card.querySelector(".fw-semibold").innerText.replace(/[₱,]/g, "");
        return parseFloat(priceText);
      }

      // Show/Hide Cards on See More Button Click
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