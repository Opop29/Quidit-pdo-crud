    <!DOCTYPE html>
    <html>
    <head>
        <title>User Profile</title>
        <style>
           body {
            background-color: #1a0900;
        }

        .profile-container {
            width: 1300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #1a0900;
            border-radius: 5px;
            text-align: center;
        }

        .cover-photo {
            border: 5px solid Orange;
            width: 100%;
            height: 300px;
            background-color: #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            margin-left: -10px;
        }

        .profile-picture {
            width: 400px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid orange;
            margin-left: -850px;
            margin-top: -130px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .user-info, .user-info p {
            font-size: 20px; /* Increase font size for user profile information */
        }

        .address-details, .address-details p {
            font-size: 20px; /* Increase font size for address details */
        }

        .btn {
            padding: 10px 20px; /* Padding for buttons */
            font-size: 16px; /* Font size for buttons */
            border-radius: 5px; /* Rounded corners for buttons */
            color: orange; /* Set button text color to orange */
            border: 2px solid orange; /* Set button border color to orange */
            background-color: black; /* Set button background color to black */
        }

        .btn:hover {
            background-color: orange; /* Set button background color to orange on hover */
            color: black; /* Set button text color to black on hover */
        }

        .error {
            color: red; /* Error message color */
            font-size: 14px; /* Error message font size */
        }
        .user-info h2 {
    color: orange; /* Set the color of <h2> elements inside .user-info to orange */
}


        nav {
            flex: 6;
            background-color: black;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px orange(0, 0, 0, 0.1);
            border: 6px solid orange;
            border-radius: 10px;
        }
        </style>
    </head>
    <body>
    <nav>
        <div class="logo-container">
            <img src="../media/logoone.jpg" alt="Logo" style="max-width: 150px; margin-top: -10px;">
        </div>
               
        <div style="text-align: center;">
            <a href="../public/user/reset.php" class="btn btn-warning" style="border-color: black;">Reset Password</a>
            <a href="../public/user/logout.php" class="btn btn-danger mr-3" style="border-color: black;">Log-out</a>
            <a href="../products/despay.php" class="btn btn-primary">Back to Products</a>
        </div>
</nav>
        <div class="profile-container">
        <div class="cover-photo">
        <img src="../media/pirate.jpg" alt="Cover Photo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
    </div>
            <img src="../media/luffy.jpg" alt="Profile Picture" class="profile-picture">
            <div class="user-info">
                <h2>User Profile</h2>
                <?php
                    // Start the session
                    session_start();

                    // Check if user is logged in
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        // Retrieve user ID from session
                        $user_id = $_SESSION["id"];
                        
                        // Database connection details
                        $host = 'localhost';
                        $dbname = 'u593341949_db_quidit';
                        $username = 'u593341949_dev_quidit';
                        $password = '20221240Quidit';
                        
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
                              // Replace empty fields with "N/A"
        $user['first_name'] = !empty($user['first_name']) ? $user['first_name'] : 'N/A';
        $user['last_name'] = !empty($user['last_name']) ? $user['last_name'] : 'N/A';
        $user['phone_number'] = !empty($user['phone_number']) ? $user['phone_number'] : 'N/A';
        $user['age'] = !empty($user['age']) ? $user['age'] : 'N/A';
        
                            
                            // Display user information
                            echo "<p style='color: orange;'><strong>User ID:</strong> $user_id</p>";
echo "<p style='color: orange;'><strong>Name:</strong> {$user['first_name']} {$user['last_name']}</p>";
echo "<p style='color: orange;'><strong>Phone Number:</strong> {$user['phone_number']}</p>";
echo "<p style='color: orange;'><strong>Age:</strong> {$user['age']}</p>";

                        } catch(PDOException $e) {
                            // Display error message
                            echo "Error: " . $e->getMessage();
                        }

                        // Fetch address details
                        try {
                            // Prepare and execute SQL statement to fetch address information
                            $stmt = $conn->prepare("SELECT street, city, state, postal_code, country FROM addresses WHERE user_id = :user_id");
                            $stmt->bindParam(':user_id', $user_id);
                            $stmt->execute();
                            $address = $stmt->fetch(PDO::FETCH_ASSOC);
                            
                            
                           // Display address information
echo "<h2>Address Details</h2>";
echo "<p style='color: orange;'><strong>Street:</strong> " . (!empty($address['street']) ? $address['street'] : 'N/A') . "</p>";
echo "<p style='color: orange;'><strong>City:</strong> " . (!empty($address['city']) ? $address['city'] : 'N/A') . "</p>";
echo "<p style='color: orange;'><strong>State:</strong> " . (!empty($address['state']) ? $address['state'] : 'N/A') . "</p>";
echo "<p style='color: orange;'><strong>Postal Code:</strong> " . (!empty($address['postal_code']) ? $address['postal_code'] : 'N/A') . "</p>";
echo "<p style='color: orange;'><strong>Country:</strong> " . (!empty($address['country']) ? $address['country'] : 'N/A') . "</p>";

                        } catch(PDOException $e) {
                            // Display error message
                            echo "Error: " . $e->getMessage();
                        }
                    } else {
                        // If user is not logged in, handle accordingly
                        echo "User is not logged in.";
                    }
                ?>
            </div>
        </div>
    </body>
    </html>
