<?php
include '../database/dbconnect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product-id'])) {
    $product_id = intval($_POST['product-id']);

    try {
        $pdo->beginTransaction();

        // Delete associated images
        $delete_img_stmt = $pdo->prepare("DELETE FROM img WHERE product_id = ?");
        $delete_img_stmt->execute([$product_id]);

        // Delete the product
        $delete_product_stmt = $pdo->prepare("DELETE FROM product WHERE product_id = ?");
        $delete_product_stmt->execute([$product_id]);

        $pdo->commit();

        $_SESSION['delete_success'] = true;
        header("Location: edit-details.php");
        exit();
    } catch (PDOException $e) {
        $pdo->rollBack();
        $_SESSION['delete_error'] = "Error deleting product: " . $e->getMessage();
        header("Location: edit-details.php?id=" . $product_id);
        exit();
    }
} else {
    header("Location: inventory-overview.php");
    exit();
}
?>