
<?php include '../partials/admin-header.php'; ?>
 

<main class="p-2 px-4">
    <section id="dashboard">
        <div class="content p-4 pb-2">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="fw-bold mb-0">Delivered Order List</h1>
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
            <p class="mb-2 fs-4 fw-medium">Delivered</p>
            <div class="container">
                
                        </div>
                    </div>

        <div class="content table-responsive p-4 pt-2">
        <table class="table table-hover fs-6">
        <thead>
        <tbody class="fw-light">
    <tr class="text-center" >
      <th scope="col">ORDER NO.</th>
      <th scope="col">CUSTOMER</th>
      <th scope="col">ORDER ITEMS</th>
      <th scope="col">TOTAL AMOUNT</th>
      <th scope="col">DELIVERED DATE</th>
      <th scope="col">TRACKING NUMBER</th>
      <th scope="col">DELIVERED UPDATE</th>
      
    </tr>
  </thead>
  
 
    <tr class="text-center">
      <th scope="row">ORD001</th>
      <td>Lorelie Dela Cruz</td>
      <td>Classic Flap Bag</td>
      <td>₱350,150</td>
      <td>2024-09-08</td>
      <td>TRK667788910PH</td>
      <td>2024-09-08</td>

    </tr>

    <tr class="text-center">
      <th scope="row">ORD002</th>
      <td>John Lester Montejo</td>
      <td>Alma Body Bag</td>
      <td>₱120,000</td>
      <td>2024-09-19</td>
      <td>TRK667788990PH</td>
      <td>2024-09-20</td>

    </tr>
    <tr class="text-center">
      <th scope="row">ORD004</th>
      <td>Maria Alleiah Cruz</td>
      <td>Gucci Marmont Matelassé</td>
      <td>₱95,000</td>
      <td>2024-10-01</td>
      <td>TRK998877665PH</td>
      <td>2024-10-01</td>

                        
       </tr>
       <tr class="text-center">
      <th scope="row">ORD005</th>
      <td>King Arthur Delos Trinos</td>
      <td>Bottega Veneta Padded Cassette</td>
      <td>₱180,000</td>
      <td>2024-10-08</td>
      <td>TRK556677889PH</td>
      <td>2024-10-09</td>

                        
       </tr>
 </tr>
       <tr class="text-center">
      <th scope="row">ORD007</th>
      <td>Elyse Rivera</td>
      <td>Prada Nylon Backpack</td>
      <td>₱65,150</td>
      <td>2024-10-16</td>
      <td>TRK556677819PH</td>
      <td>2024-10-16</td>

                        
     </tr>
       <tr class="text-center">
      <th scope="row">ORD008</th>
      <td>Ma. Darlyn Rodriguez</td>
      <td>Hermes Birkin 30</td>
      <td>₱1,150,150</td>
      <td>2024-10-24</td>
      <td>TRK667788110PH</td>
      <td>2024-10-24</td>

                        
       </tr>
       <tr class="text-center">
      <th scope="row">ORD009</th>
      <td>Kiana Estelita</td>
      <td>Celine Belt Bag</td>
      <td>₱250,000</td>
      <td>2024-10-27</td>
      <td>TRK223344556PH</td>
      <td>2024-10-27</td>

                        
       </tr>
  </tbody>

  
       </table>
       </div>

    </section>
</main>




<?php include '../partials/admin-footer.php'; ?>




