<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
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
        } .error {
            color: red; /* Error message color */
            font-size: 14px; /* Error message font size */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Thank You!</h2>
    <p>Your purchase was successful, and your address has been recorded.</p>
    <a href="../products/despay.php" class="btn btn-primary">Back to Products</a>
</div>
<div class="container">
    <div class="cool-background">
        <h2>Track Your Order</h2>
        <form id="trackingForm">
            <div class="form-group">
                <label for="orderCode">Order Code:</label>
                <input type="text" class="form-control" id="orderCode" required>
                <span class="error" id="orderCodeError"></span>
            </div>
            <button type="submit" class="btn btn-primary">Track</button>
            <button type="button" class="btn btn-danger" onclick="cancelTracking()">Cancel</button>
        </form>
        <div id="trackingInfo" style="display: none;">
            <h3>Delivery Information</h3>
            <p id="deliveryStatus"></p>
            <p id="estimatedDelivery"></p>
        </div>
    </div>
</div>


<div class="container">
    <div class="cool-background">
        <h2>Delivery Timeline</h2>
        <ul class="timeline">
            <!-- Your existing timeline content -->
            <!-- Example Delivery Event -->
            <li class="event">
                <div class="left-arrow"></div>
                <h3>Package Shipped</h3>
                <span class="time">May 25, 2024</span>
                <p>Your package has been shipped and is on its way.</p>
            </li>
        </ul>
    </div>
</div>

<script>
    function validateLogisticsForm() {
        var trackingNumber = document.getElementById('trackingNumber').value;
        var deliveryDate = document.getElementById('deliveryDate').value;

        var trackingNumberError = document.getElementById('trackingNumberError');
        var deliveryDateError = document.getElementById('deliveryDateError');

        var isValid = true;

        // Validation for Tracking Number
        if (trackingNumber.trim() === '') {
            trackingNumberError.textContent = 'Please enter the tracking number';
            isValid = false;
        } else {
            trackingNumberError.textContent = '';
        }

        // Validation for Delivery Date
        if (deliveryDate.trim() === '') {
            deliveryDateError.textContent = 'Please select the estimated delivery date';
            isValid = false;
        } else {
            deliveryDateError.textContent = '';
        }

        return isValid;
    }

    function cancelLogistics() {
        // Redirect to the previous page or perform any other cancel action
        window.history.back();
    }

    document.getElementById('logisticsForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission
        if (validateLogisticsForm()) {
            // If form is valid, you can perform further actions here, such as submitting data via AJAX
            alert('Logistics information submitted successfully!');
        }
    });
    function trackOrder() {
    var orderCode = document.getElementById('orderCode').value;
    var trackingInfo = document.getElementById('trackingInfo');
    var deliveryStatus = document.getElementById('deliveryStatus');
    var estimatedDelivery = document.getElementById('estimatedDelivery');

    // Predefined delivery information based on order code
    var deliveryData = {
        'ABC123': {
            status: 'Out for delivery',
            estimatedDelivery: 'May 28, 2024'
        },
        'XYZ456': {
            status: 'Delivered',
            estimatedDelivery: 'May 25, 2024'
        },
        // Add more order codes and delivery information as needed
    };

    if (deliveryData.hasOwnProperty(orderCode)) {
        var delivery = deliveryData[orderCode];
        trackingInfo.style.display = 'block';
        deliveryStatus.textContent = 'Delivery Status: ' + delivery.status;
        estimatedDelivery.textContent = 'Estimated Delivery Date: ' + delivery.estimatedDelivery;
    } else {
        // If order code is not found, display a message or handle it as per your requirement
        trackingInfo.style.display = 'none'; // Hide tracking info if order code is not found
        alert('Order not found. Please check your order code.');
    }
}


</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
