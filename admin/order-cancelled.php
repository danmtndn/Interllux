<?php include '../partials/admin-header.php'; ?>


<main class="p-2 px-4">
    <section id="dashboard">
        <div class="content p-4 pb-2">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="fw-bold mb-0">Cancel Order List</h1>
                </div>

                <div class="col-12 col-md-6 d-flex justify-content-md-end justify-content-start mt-2 mt-md-0">
                        
                        <div class="dropdown">
                        <button class="btn dropdown-toggle btn-sm border border-dark-subtle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">Select Date</button>
                        <ul class="dropdown-menu border border-dark-subtle" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">Last Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                            <li><a class="dropdown-item" href="#">This Quarter</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content p-4 py-2">
            <p class="mb-2 fs-4 fw-medium">Cancelled</p>
            <div class="container">
                
                        </div>
                    </div>

        <div class="content table-responsive p-4 pt-2">
        <table class="table table-hover fs-6">
        <thead>
        <tbody class="fw-light">
    <tr class="text-center">
      <th scope="col">ORDER NO.</th>
      <th scope="col">CUSTOMER</th>
      <th scope="col">ORDER ITEMS</th>
      <th scope="col">TOTAL AMOUNT</th>
      <th scope="col">CANCEL DATE</th>
      <th scope="col">REASON</th>
      
    </tr>
  </thead>

  <tr class="text-center">
      <th scope="row">ORD003</th>
      <td>Luisa Mae Macapugay</td>
      <td>Dior Book Tote</td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
<tr class="text-center">
      <th scope="row">ORD006</th>
      <td>Amy Torres</td>
      <td>Chanel Boy Bag</td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
  </tbody>
  
</table>
</div>

</section>
</main>













<?php include '../partials/admin-footer.php'; ?>