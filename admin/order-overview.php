<?php include '../partials/admin-header.php'; ?>

<main class="p-2 px-4">
    <section id="restock">
        <div class="content p-4 pb-0">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="fw-bold mb-0">Pending Order</h1>
                </div>
            </div>

            

            <div class="container-fluid">
                <ul class="list-unstyled">
                    <li class="list-group-item list-group-item-secondary rounded-pill my-2 p-2 px-4 d-flex justify-content-between align-items-center">Product 1 is low on stock.
                        <input type="button" class="btn btn-success btn-sm fw-semibold ms-auto" data-bs-toggle="modal" data-bs-target="#Order-modal" value="Approve">
                        <tr> | </tr>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-modal" class="btn btn-danger mt-3 mt-sm-0 fw-medium" data-order-number="ORD001">Cancel</a>
                    </li>
                    <li class="list-group-item list-group-item-secondary rounded-pill my-2 p-2 px-4 d-flex justify-content-between align-items-center">Product 2 is low on stock.
                        <input type="button" class="btn btn-success btn-sm fw-semibold ms-auto" data-bs-toggle="modal" data-bs-target="#Order-modal" value="Approve">
                        <tr> | </tr>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-modal" class="btn btn-danger mt-3 mt-sm-0 fw-medium" data-order-number="ORD002">Cancel</a>
                    </li>
                </ul>
            </div>

            <div class="content p-4 pb-0">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h2 class="fw-bold mb-0">ORDER TRACKING </h2>
                    <div class="row align-items-center mt-3">
                    <div class="search-bar col-auto">
                        <form action="" method="get" class="d-flex">
                            <input type="text" name="search" class="form-control me-2" placeholder="Type your search here" value="" style="width: 280px;">
                            <button type="submit" class="btn btn-dark"> <i class="fa-solid fa-magnifying-glass"> </i></button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="content table-responsive p-4 pt-2">
                <table class="table table-hover fs-6">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ORDER NO.</th>
                            <th scope="col">CUSTOMER</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">ORDER STATUS</th>
                            <th scope="col">EDIT</th>
                        </tr>
                    </thead>
                    <tbody class="fw-light">
                        <!-- Example Orders -->
                       <tbody class="fw-light">
    <!-- Example Orders -->
    <tr class="text-center">
        <th scope="row">ORD001</th>
        <td>josh hart</td>
        <td>₱350,000</td>
        <td>Processing</td>
        <td><a href="order_details.php" class="text-black fw-semibold">edit</a></td>
    </tr>

    <tr class="text-center">
        <th scope="row">ORD002</th>
        <td>jane doe</td>
        <td>₱120,000</td>
        <td>Processing</td>
        <td><a href="order_details.php" class="text-black fw-semibold">edit</a></td>
    </tr>
</tbody>
                    </tbody>
                </table>
            </div>

       <!-- APPROVE Confirmation Modal -->
            <div class="custom-modal modal fade" id="Order-modal" tabindex="-1" aria-labelledby="OrdermodalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center pb-1" style="border-bottom: none;">
                            <h5 class="modal-title text-dark text-center fs-3 fw-bold" id="OrdermodalLabel">Order #111 Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <label for="costumer-name" class="form-label fw-bold me-2">Customer's Name:</label>
                            <span id="costumer-name" class="costumer-name">Jane Doe</span>
                            <ol class="list-group list-group-numbered">
                                <li class="d-flex justify-content-between align-items-start">
                                    <label for="order-main-name" class="form-label fw-bold me-2">Order Items:</label>
                                    <li><a class="dropdown-item" href="#">LV bag</a></li>
                                    <li><a class="dropdown-item" href="#">150,000</a></li>
                                    <div class="text-end">x1</div>
                                    <li><a class="dropdown-item" href="#">Chanel bag</a></li>
                                    <li><a class="dropdown-item" href="#">35,000</a></li>
                                    <div class="text-end">x1</div>
                                </li>  
                            </ol>
                            <span class="fw-bold">Shipping fee:</span>
                            <div class="text-end">
                                150
                            </div>

                            <span class="fw-bold">Total:</span>
                            <div class="text-end">
                                185,150
                            </div>
                            <p>______________________________________________________________________</p>
                            <div class="dropdown">
  
  <div class="mb-2 d-flex align-items-center">
                                <label for="tracking-no" class="form-label fw-bold me-2">Payment method:</label>
                                
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Choose Here
  </a> <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Online Banking</a></li>
    <li><a class="dropdown-item" href="#">E-Wallet</a></li>
   
  </ul>
                            </div>
                            
 
</div>

                            <div class="mb-2 d-flex align-items-center">
                                <label for="tracking-no" class="form-label fw-bold me-2">Account:</label>
                                <input type="text" class="form-control w-50" id="tracking-no" required>
                            </div>

                            <div class="mb-2 d-flex align-items-center">
                                <label for="delivery-date" class="form-label fw-bold me-2">Payment Date:</label>
                                <input type="date" class="form-control w-50" id="delivery-date" required>
                            </div>

                            <div class="mb-2 d-flex align-items-center">
                                <label for="tracking-no" class="form-label fw-bold me-2">Ref #:</label>
                                <input type="text" class="form-control w-50" id="tracking-no" required>
                            </div>
                        </div>
                        <div class="modal-footer pt-1" style="border-top: none;">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cancel Confirmation Modal -->
            <div class="custom-modal modal fade" id="cancel-modal" tabindex="-1" aria-labelledby="cancelmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content p-1">
                        <div class="modal-header justify-content-center pb-1" style="border-bottom: none;">
                            <h5 class="modal-title text-dark text-center fs-3 fw-bold" id="cancelmodalLabel">Are you sure you want to cancel?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <p id="order-number-message" class="text-center"></p>



                            <div class="modal-body">
                            <label for="costumer-name" class="form-label fw-bold me-2">Customer's Name:</label>
                            <span id="costumer-name" class="costumer-name">Jane Doe</span>
                            <ol class="list-group list-group-numbered">
                                <li class="d-flex justify-content-between align-items-start">
                                    <label for="order-main-name" class="form-label fw-bold me-2">Order Items:</label>
                                    <li><a class="dropdown-item" href="#">LV bag</a></li>
                                    <li><a class="dropdown-item" href="#">150,000</a></li>
                                    <div class="text-end">x1</div>
                                    <li><a class="dropdown-item" href="#">Chanel bag</a></li>
                                    <li><a class="dropdown-item" href="#">35,000</a></li>
                                    <div class="text-end">x1</div>
                                </li>  
                            </ol>
                            <span class="fw-bold">Shipping fee:</span>
                            <div class="text-end">
                                150
                            </div>

                            <span class="fw-bold">Total:</span>
                            <div class="text-end">
                                185,150
                            </div>
                            <p>______________________________________________________________________</p>
                            <div class="dropdown">
                            <label for="costumer-name" class="form-label fw-bold me-2">Reason:</label>
                            <div class="mb-3">
       
        <textarea class="form-control" id="commentBox" rows="6" placeholder="Write your reason here..."></textarea>
      </div>


                        </div>

                        </div>
                        </div>


                        <div class="modal-footer pt-1" style="border-top: none;">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-light">Save</button>
                        </div>


                    </div>
                </div>
            </div>

        

        </div>
       

    </section>
</main>

<?php include '../partials/admin-footer.php'; ?>

<script>
    
    var cancelModal = document.getElementById('cancel-modal');
    cancelModal.addEventListener('show.bs.modal', function (event) {
        
        var button = event.relatedTarget;

        
        var orderNumber = button.getAttribute('data-order-number');

        
        var orderMessage = cancelModal.querySelector('#order-number-message');
        orderMessage.textContent = 'Are you sure you want to cancel Order ' + orderNumber + '?';
    });

    
    var shippedModal = document.getElementById('Shipped-modal');
    shippedModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var orderNumber = button.getAttribute('data-order-number');
        var orderInput = shippedModal.querySelector('#order-number');
        orderInput.value = orderNumber;
    });

    var doneModal = document.getElementById('Done-modal');
    doneModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
    });
