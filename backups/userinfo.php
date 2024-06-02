<?php
// Database connection
$host = 'localhost';
$dbname = 'u593341949_db_quidit';
$username = 'u593341949_dev_quidit';
$password = '20221240Quidit';

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Start session
    session_start();

    // Check if user is logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        // Retrieve user ID from session
        $user_id = $_SESSION["id"];

        // Get POST data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_number = $_POST['phone_number'];
        $age = $_POST['age'];

        // Prepare SQL statement to insert into database
        $sql = "INSERT INTO user_info (user_id, first_name, last_name, phone_number, age) VALUES (:user_id, :first_name, :last_name, :phone_number, :age)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':age', $age);

        // Execute the statement
        $stmt->execute();

        // Redirect to a confirmation page or back to the product list
        header("Location: address.php");
        exit(); // Terminate script execution after redirection
    } else {
        // If user is not logged in, handle accordingly
        echo "User is not logged in.";
    }
} catch(PDOException $e) {
    // Display error message
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
