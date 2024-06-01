<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>
        /* CSS for styling */
        .profile-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }
        .cover-photo {
            width: 100%;
            height: 150px;
            background-color: #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .user-info {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<a href="../products/despay.php" class="btn btn-primary">Back to Products</a>
    <div class="profile-container">
        <div class="cover-photo"></div>
        <img src="../media/luffy.jpg" alt="Profile Picture" class="profile-picture">
        <div class="user-info">
            <h2>User Profile</h2>
            <?php
                // Start the session
                session_start();

                // Check if user is logged in
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    // Display user information
                    echo "<p><strong>User ID:</strong> ".$_SESSION["id"]."</p>";
                    echo "<p><strong>Name:</strong> ".$_SESSION["username"]."</p>";
                    // You can retrieve and display other user information here
                } else {
                    // Redirect user to login page if not logged in
                    header("location: ./login.php");
                    exit;
                }
            ?>
        </div>
    </div>
</body>
</html>
