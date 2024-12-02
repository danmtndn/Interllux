<?php
include '../../database/dbconnect.php';

session_start();

if (!isset($_SESSION['id'])) {
    die("User not logged in.");
}

$user_id = $_SESSION['id'];

// Process account details update
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if password matches confirm password
    if ($password !== $_POST['confirm_password']) {
        die("Passwords do not match.");
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Update account details in the database
    $query = "UPDATE users SET email = $1, password = $2 WHERE id = $3";
    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email, $hashed_password, $user_id]);
        if ($stmt->rowCount() > 0) {
            echo "Update successful";
        } else {
            echo "Error updating account details";
        }
    } catch (PDOException $e) {
        die("Error updating account details: " . $e->getMessage());
    }
}

// Process personal details update
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['contact'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact = $_POST['contact'];
    $street_address = $_POST['street'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $zip_code = $_POST['zip_code'];
    $country = $_POST['country'];
    $shipping_region = $_POST['region'];

    // Update personal details in the database
    $query = "UPDATE users SET 
              user_firstname = $1, 
              user_lastname = $2, 
              phone_num = $3, 
              street_address = $4, 
              barangay = $5,
              shipping_region = $6, 
              province = $7, 
              city = $8,
              zip_code = $9, 
              country = $10 
              WHERE id = $11";
    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            $first_name, $last_name, $contact, $street_address, $barangay,
            $shipping_region, $province, $city, $zip_code, $country, $user_id
        ]);
        if ($stmt->rowCount() > 0) {
            echo "Update successful";
        } else {
            echo "Error updating personal details";
        }
    } catch (PDOException $e) {
        die("Error updating personal details: " . $e->getMessage());
    }
}

// Redirect back to the account details page
header("Location: account-details.php");
exit();
?>