<?php
// Database connection
$host = 'localhost';
$dbname = 'x';
$username = 'root';
$password = '';

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get POST data
    $title = $_POST['title']; // Assuming you have the user ID from session or other method
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $img = $_POST['img'];


   
    

    // Prepare SQL statement to insert into database
    $sql = "INSERT INTO products (title, description, price, quantity, img) VALUES (:title, :description, :price, :quantity, :img)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':img', $img);

    // Execute the statement
    $stmt->execute();

    // Redirect to a confirmation page or back to the product list
    header("Location: ../products/despay.php");
    exit(); // Terminate script execution after redirection
} catch(PDOException $e) {
    // Display error message
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
