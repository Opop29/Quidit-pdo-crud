<?php
// Start the session
session_start();

// Check if user is logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // Retrieve user ID from session
    $user_id = $_SESSION["id"];

    // Database connection details
    $host = 'localhost';
    $dbname = 'x';
    $username = 'root';
    $password = '';

    try {
        // Create a PDO connection
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare and execute SQL statement to fetch user information
        $stmt = $conn->prepare("SELECT first_name, last_name, phone_number, age FROM user_info WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Check if user information is provided
        $hasInformation = !empty($user['first_name']) && !empty($user['last_name']) && !empty($user['phone_number']) && !empty($user['age']);
        
        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode(['hasInformation' => $hasInformation]);
    } catch(PDOException $e) {
        // Display error message
        echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
    }
} else {
    // If user is not logged in, return error message
    echo json_encode(['error' => 'User is not logged in.']);
}
?>
