<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            background-color: #1a0900; /* Set background color */
            color: orange; /* Set text color */
            font-family: Arial, sans-serif; /* Set font family */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: black; /* Set container background color */
            border: 2px solid orange; /* Yellow border */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 20px orange(0, 0, 0, 0.1); /* Light shadow */
            padding: 40px;
            width: 400px;
            max-width: 100%;
        }

        h2 {
            text-align: center; /* Center-align heading */
            margin-bottom: 30px; /* Add space below heading */
        }

        label {
            font-weight: bold; /* Make labels bold */
        }

        input[type="text"], input[type="date"] {
            width: 100%; /* Make input fields full width */
            padding: 10px; /* Add padding */
            margin-bottom: 20px; /* Add space below input fields */
            border: 1px solid orange; /* Add border */
            border-radius: 5px; /* Rounded corners */
            box-sizing: border-box; /* Include padding and border in width */
        }

        input[type="submit"] {
            width: 100%; /* Make submit button full width */
            padding: 10px; /* Add padding */
            border: none; /* Remove border */
            border-radius: 5px; /* Rounded corners */
            background-color: black; /* Blue background color */
            color: orange; /* White text color */
            cursor: pointer; /* Add cursor pointer */
        }

        input[type="submit"]:hover {
            background-color: orange; /* Change background color on hover */
            color: black; /* Change text color on hover */
            font-weight: bold; /* Make text bold on hover */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
            border: 2px solid black; /* Add black border on hover */
        }

        .btn-primary, .btn-cancel {
            padding: 10px 20px; /* Padding for buttons */
            font-size: 16px; /* Font size for buttons */
            border-radius: 5px; /* Rounded corners for buttons */
            color: orange; /* Set button text color to orange */
            border: 2px solid orange; /* Set button border color to orange */
            background-color: transparent; /* Set button background color to transparent */
            cursor: pointer; /* Add cursor pointer */
        }

        .btn-primary:hover, .btn-cancel:hover {
            background-color: orange; /* Set button background color to orange on hover */
            color: black; /* Set button text color to black on hover */
        }

        .container {
            text-align: center; /* Center-align container content */
        }

        .form-group {
            margin-bottom: 20px; /* Add space between form elements */
        }

        .error {
            color: red; /* Error message color */
            font-size: 14px; /* Error message font size */
            margin-top: 5px; /* Add space above error message */
        }

        .total-payment {
            font-size: 18px; /* Total payment text size */
            margin-bottom: 20px; /* Add space below total payment text */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Secure Payment Form</h2>
        <form action="process_payment.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="card_number">Card Number:</label><br>
                <input type="text" id="card_number" name="card_number" placeholder="Enter your card number" required><br>
                <span class="error" id="card_error"></span> <!-- Error message for card number -->
            </div>
            <div class="form-group">
                <label for="expiry_date">Date payment:</label><br>
                <input type="date" id="expiry_date" name="expiry_date" style="height: 40px; width: calc(100% - 22px);" required><br>
                <span class="error" id="expiry_error"></span> <!-- Error message for expiry date -->
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label><br>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required><br>
                <span class="error" id="cvv_error"></span> <!-- Error message for CVV -->
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label><br>
                <input type="text" id="amount" name="amount" placeholder="Enter payment amount" required><br>
                <span class="error" id="amount_error"></span> <!-- Error message for amount -->
            </div>
            <input type="submit" value="Pay Now" class="btn-primary">
            
            <button type="button" class="btn-cancel" onclick="cancelPayment()">Cancel</button>
        </form>
    </div>

    <script>
        const totalPaymentAmount = 50.00; // Set the total payment amount here

        function cancelPayment() {
            window.location.href = '../products/despay.php';
        }

        function validateForm() {
            var cardNumber = document.getElementById('card_number').value;
            var expiryDate = document.getElementById('expiry_date').value;
            var cvv = document.getElementById('cvv').value;
            var amount = document.getElementById('amount').value;

            var cardError = document.getElementById('card_error');
            var expiryError = document.getElementById('expiry_error');
            var cvvError = document.getElementById('cvv_error');
            var amountError = document.getElementById('amount_error');

            var isValid = true;

            if (!cardNumber.match(/^\d{16}$/)) {
                cardError.textContent = 'Invalid card number (must be 16 digits)';
                isValid = false;
            } else {
                cardError.textContent = '';
            }

            if (!expiryDate) {
                expiryError.textContent = 'Please select expiry date';
                isValid = false;
            } else {
                expiryError.textContent = '';
            }

            if (!cvv.match(/^\d{3}$/)) {
                cvvError.textContent = 'Invalid CVV (must be 3 digits)';
                isValid = false;
            } else {
                cvvError.textContent = '';
            }

            if (!amount.match(/^\d+(\.\d{2})?$/)) {
                amountError.textContent = 'Invalid amount';
                isValid = false;
            } else {
                amountError.textContent = '';
            }

            if (parseFloat(amount) < totalPaymentAmount) {
                amountError.textContent = 'Insufficient amount. The total payment is $' + totalPaymentAmount.toFixed(2);
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>
</html>