<?php
include '../database/dbconnect.php';

header('Content-Type: application/json');

function sendJsonResponse($success, $message = '', $data = null) {
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data
    ]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    sendJsonResponse(false, 'Invalid request method');
}

try {
    $restockId = isset($_POST['restock_id']) && $_POST['restock_id'] !== '' ? intval($_POST['restock_id']) : null;
    $productId = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    $trackingNo = $_POST['tracking_no'];
    $status = $_POST['status'];
    $deliveryDate = $_POST['delivery_date'];
    $adminId = 1; // Replace with actual admin ID from session

    $pdo->beginTransaction();

    if ($restockId === null) {
        // Insert new restock
        $stmt = $pdo->prepare("
            INSERT INTO restock 
            (product_id, admin_id, restock_quantity, restock_delivery_date, restock_delivery_status, delivery_reference_number)
            VALUES (:product_id, :admin_id, :quantity, :delivery_date, :status, :tracking_no)
            RETURNING restock_id
        ");
    } else {
        // Update existing restock
        $stmt = $pdo->prepare("
            UPDATE restock SET
            product_id = :product_id,
            admin_id = :admin_id,
            restock_quantity = :quantity,
            restock_delivery_date = :delivery_date,
            restock_delivery_status = :status,
            delivery_reference_number = :tracking_no
            WHERE restock_id = :restock_id
            RETURNING restock_id
        ");
        $stmt->bindParam(':restock_id', $restockId, PDO::PARAM_INT);
    }

    $stmt->bindParam(':product_id', $productId, PDO::PARAM_INT);
    $stmt->bindParam(':admin_id', $adminId, PDO::PARAM_INT);
    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':delivery_date', $deliveryDate);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':tracking_no', $trackingNo);

    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $newRestockId = $result['restock_id'];

    if ($status === 'delivered') {
        // Update product quantity
        $updateProductStmt = $pdo->prepare("
            UPDATE product 
            SET quantity = quantity + :quantity 
            WHERE product_id = :product_id
        ");
        $updateProductStmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $updateProductStmt->bindParam(':product_id', $productId, PDO::PARAM_INT);
        $updateProductStmt->execute();
    }

    $pdo->commit();
    sendJsonResponse(true, 'Restock updated successfully', ['restock_id' => $newRestockId]);

} catch (PDOException $e) {
    $pdo->rollBack();
    http_response_code(500);
    sendJsonResponse(false, 'Error: ' . $e->getMessage());
}
?>