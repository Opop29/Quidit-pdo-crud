<?php
// Establish database connection
$host = 'localhost';
$dbname = 'u593341949_db_quidit';
$username = 'u593341949_dev_quidit';
$password = '20221240Quidit';
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Check if user is logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // Retrieve user ID from session
    $user_id = $_SESSION["id"];

    // Retrieve form data
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $amount = $_POST['amount'];

    // Insert payment details into database
    $sql = "INSERT INTO payments (user_id, card_number, expiry_date, cvv, amount)
            VALUES ('$user_id', '$card_number', '$expiry_date', '$cvv', '$amount')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to success.php
        header("Location: logistic.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // If user is not logged in, handle accordingly
    echo "User is not logged in.";
}

$conn->close();
?>
