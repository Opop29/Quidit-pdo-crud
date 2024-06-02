<?php
// 1. Receive Data
$data = json_decode(file_get_contents('php://input'), true);

// 2. Sanitize and Validate (You should add more validation as needed)
$product_id = isset($data['product_id']) ? $data['product_id'] : null;
$productName = isset($data['productName']) ? $data['productName'] : null;
$price = isset($data['price']) ? $data['price'] : null;

$host = 'localhost';
$dbname = 'u593341949_db_quidit';
$username = 'u593341949_dev_quidit';
$password = '20221240Quidit';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 4. Insert Data
$sql = "INSERT INTO purchases (product_id, productName, price) VALUES ('$product_id', '$productName', '$price')";

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true);
    echo json_encode($response);
} else {
    $response = array("success" => false, "error" => $conn->error);
    echo json_encode($response);
}

$conn->close();
?>
