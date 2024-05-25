<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<style>
  
</style>
<body>

    <div class="container">
        <h2 class="mt-5">Enter Your Address</h2>
        <form action="userinfo.php" method="POST">
            <!-- Add a hidden input field for user ID -->
            <input type="hidden" name="user_id" value="1"> <!-- Assuming logged in user has ID 1. Modify this based on your login system. -->
            <div class="form-group">
                <label for="first_name">first name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="phone_number">phone_number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group">
                <label for="age">age</label>
                <input type="text" class="form-control" id="age" name="age" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button href="../products/despay.php" class="btn btn-danger mr-3" style="border-color: black;">cancel</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
