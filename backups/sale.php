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
        <h2 class="mb-4">sale</h2>
        <form action="config_sale.php" method="POST" onsubmit="return validateForm()">
           
            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="title " required>
                <span class="error" id="title_error"></span> <!-- Error message for first name -->
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="description" name="description" placeholder="description of the product" required>
                <span class="error" id="description_error"></span> <!-- Error message for last name -->
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="price" name="price" placeholder="producta price" required>
                <span class="error" id="price_error"></span> <!-- Error message for phone number -->
            </div>
            <div class="form-group">
                <input  class="form-control" id="img" name="img" placeholder="img" required>
                
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity" required>
                <span class="error" id="quantity_error"></span> <!-- Error message for age -->
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="../products/despay.php" class="btn btn-danger ml-2">Cancel</a>
        </form>
    </div>

   
</body>
</html>