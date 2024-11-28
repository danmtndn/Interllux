<?php include '../partials/admin-header.php'; ?>

<?php
$order_no = isset($_GET['order_no']) ? $_GET['order_no'] : 'ORD111'; 
$order_date = '2024-11-20'; 
$order_status = 'Processing'; 

$order_status_history = [
    ['Confirmation', '2024-11-20'],
    ['Shipped', '2024-11-21'],
    ['Delivered', '2024-11-22'],
    ['Done', '2024-11-23'],
];

$total_amount = '₱185,150'; // Example total amount
$tracking_number = '123456789'; // Example tracking number

// Customer Information
$customer_name = 'Jane Doe';
$shipping_address = 'Sampaguita St, Barangay San Antonio, San Pedro Laguna, 4023, Philippines';

// Payment Information
$payment_method = 'E-Wallet';
$payment_account = '9474567890';
$payment_date = '11-06-2024';
$payment_ref = '7457107419583';

// Price Breakdown
$subtotal = '₱185,000';
$shipping_fee = '₱150';

// Order Items
$order_items = [
    ['Lv Bag', 1, '₱150,000', '₱150,000'],
    ['Channel Bag', 1, '₱35,000', '₱35,000'],
];

// Customer Review
$customer_review = 'No review yet';
?>

<main class="container my-4">
    <!-- Heading aligned to the left side of the screen -->
    <h4 class="fw-bold mb-4" style="text-align: left;">Order Details</h4>
    <h4 class="fw-bold mb-4" style="text-align: left;">Overview</h4>

    <!-- Order Info -->
    <div class="mb-4">
        <div class="d-flex justify-content-between">
            <p><strong>Order No:</strong> <?php echo $order_no; ?></p>
            <p><strong>Total Amount:</strong> <?php echo $total_amount; ?></p>
        </div>
        
        <div class="d-flex justify-content-between">
            <p><strong>Order Date:</strong> <?php echo $order_date; ?></p>
            <p><strong>Tracking Number:</strong> <?php echo $tracking_number; ?></p>
        </div>

        <div class="d-flex align-items-center">
            <p class="mb-0"><strong>Order Status: </strong></p>
            
            <!-- Dropdown button for selecting order status -->
            <div class="dropdown ms-3">
                <button class="btn btn-light dropdown-toggle" type="button" id="orderStatusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $order_status; ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="orderStatusDropdown">
                    <li><a class="dropdown-item" href="#" onclick="changeStatus('Processing')">Processing</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeStatus('Shipped')">Shipped</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeStatus('Delivered')">Delivered</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeStatus('Done')">Done</a></li>
                </ul>
            </div>

            <!-- Save button aligned next to the dropdown -->
            <button type="button" class="btn btn-success ms-3" onclick="saveStatus()">Save</button>
        </div>
    </div>

    <!-- Order Status  Table -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- checkbox -->
                    <th style="border-left: 2px solid black; border-right: 2px solid black;">
                        <input type="checkbox" id="selectAll" onclick="selectAllCheckboxes()">
                    </th>
                    <th style="border-left: 2px solid black; border-right: 2px solid black;">Order Status</th>
                    <th style="border-left: 2px solid black; border-right: 2px solid black;">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order_status_history as $status): ?>
                    <tr>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;">
                            <input type="checkbox" class="statusCheckbox">
                        </td> <!-- Checkbox for each row -->
                        <td style="border-left: 2px solid black; border-right: 2px solid black;"><?php echo $status[0]; ?></td>
                        <td style="border-left: 2px solid black; border-right: 2px solid black;"><?php echo $status[1]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Customer, Payment Information and Price Breakdown -->
    <div class="mt-4 row">
        <!-- Customer Information -->
        <div class="col-12 col-md-4 mb-3">
            <h5><strong>Customer Information</strong></h5>
            <p><strong>Name:</strong> <?php echo $customer_name; ?></p>
            <p><strong>Shipping Address:</strong><br><?php echo nl2br($shipping_address); ?></p>
        </div>

        <!-- Payment Information -->
        <div class="col-12 col-md-4 mb-3">
            <h5><strong>Payment Information</strong></h5>
            <p><strong>Method:</strong> <?php echo $payment_method; ?></p>
            <p><strong>Account:</strong> <?php echo $payment_account; ?></p>
            <p><strong>Payment Date:</strong> <?php echo $payment_date; ?></p>
            <p><strong>Ref#:</strong> <?php echo $payment_ref; ?></p>
        </div>

        <!-- Price Breakdown -->
        <div class="col-12 col-md-4 mb-3">
            <h5><strong>Price Breakdown</strong></h5>
            <p><strong>Subtotal:</strong> <?php echo $subtotal; ?></p>
            <p><strong>Shipping Fee:</strong> <?php echo $shipping_fee; ?></p>
            <p><strong>Total Amount:</strong> <?php echo $total_amount; ?></p>
        </div>
    </div>

    <!-- Order Items Table -->
    <div class="mt-4">
        <h5><strong>Order Items</strong></h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Item Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order_items as $item): ?>
                    <tr>
                        <td><?php echo $item[0]; ?></td>
                        <td><?php echo $item[1]; ?></td>
                        <td><?php echo $item[2]; ?></td>
                        <td><?php echo $item[3]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Customer Review -->
    <div class="mt-4">
        <h5><strong>Customer Review</strong></h5>
        <p><?php echo $customer_review; ?></p>
    </div>

    <!-- Back Button -->
    <div class="mt-4">
        <a href="overview.php" class="btn btn-dark">Back to Orders</a>
    </div>
</main>

<!-- Modal for "Shipped" Status -->
<div class="modal fade" id="shippedModal" tabindex="-1" aria-labelledby="shippedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shippedModalLabel">Order Status: Shipped</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Order Number:</strong> <?php echo $order_no; ?> has been shipped.</p>
                <p><strong>Please enter the tracking number:</strong></p>
                <input type="text" class="form-control" id="trackingNumber" placeholder="Enter tracking number">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark" onclick="saveTrackingNumber()">Save</button>
            </div>
        </div>
    </div>
</div>

<?php include '../partials/admin-footer.php'; ?>

<script>
    // JavaScript function to trigger modal when "Shipped" status is selected
    function changeStatus(status) {
        if (status === 'Shipped') {
            // Open the modal for tracking number input
            var modal = new bootstrap.Modal(document.getElementById('shippedModal'));
            modal.show();
        }
        
        document.getElementById('orderStatusDropdown').innerText = status;
    }

    // Function to save tracking number when "Save" is clicked
    function saveTrackingNumber() {
        var trackingNumber = document.getElementById('trackingNumber').value;
        if (trackingNumber) {
            // You can save the tracking number to the database here or send via AJAX
            console.log('Tracking Number Saved: ' + trackingNumber);

            // Close the modal after saving
            var modal = bootstrap.Modal.getInstance(document.getElementById('shippedModal'));
            modal.hide();
        } else {
            alert('Please enter a tracking number');
        }
    }

    // Function to simulate saving the status (you can use AJAX here to update the status)
    function saveStatus() {
        alert('Order status saved');
    }

    // Function to select/unselect all checkboxes
    function selectAllCheckboxes() {
        var checkboxes = document.querySelectorAll('.statusCheckbox');
        var selectAllCheckbox = document.getElementById('selectAll');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = selectAllCheckbox.checked;
        });
    }
</script>
