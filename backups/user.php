<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: black; /* Updated background color to black */
            color: orange; /* Set text color to orange */
        }

        .container {
            border: 2px solid #ffc107; /* Yellow border */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Light shadow */
            padding: 40px;
            margin-top: 50px; /* Add some space from the top */
        }

        .form-group {
            margin-bottom: 20px; /* Add space between form elements */
        }

        label {
            color: orange; /* Set label text color to orange */
        }

        .btn-primary, .btn-danger {
            padding: 10px 20px; /* Padding for buttons */
            font-size: 16px; /* Font size for buttons */
            border-radius: 5px; /* Rounded corners for buttons */
        }

        .btn-primary {
            background-color: #007bff; /* Blue button */
            border-color: #007bff; /* Blue button border */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3; /* Darker blue border on hover */
        }

        .btn-danger {
            background-color: #dc3545; /* Red button */
            border-color: #dc3545; /* Red button border */
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
            border-color: #bd2130; /* Darker red border on hover */
        }
        .container {
            border: 2px solid #ffc107; /* Yellow border */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Light shadow */
            padding: 40px;
            margin-top: 50px; /* Add some space from the top */
        }

        .form-group {
            margin-bottom: 20px; /* Add space between form elements */
        }

        label {
            color: orange; /* Set label text color to orange */
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
    </style>
</head>
<body>
    <div class="container text-center">
        <h2 class="mb-4">Enter Your Address</h2>
        <form action="userinfo.php" method="POST">
            <!-- Add a hidden input field for user ID -->
            <input type="hidden" name="user_id" value="1"> <!-- Assuming logged in user has ID 1. Modify this based on your login system. -->
            <div class="form-group">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="age" name="age" placeholder="Age" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="../products/despay.php" class="btn btn-danger ml-2">Cancel</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
