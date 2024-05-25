<?php
// Include config file
require_once "../../db/config.php";
 
// Define variables and initialize with empty values
$sale_name = $sale_details = $sale_retail_price = "";
$sale_name_err = $sale_details_err = $sale_retail_price_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["sale_name"]);
    if(empty($input_name)){
        $sale_name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $sale_name_err = "Please enter a valid name.";
    } else{
        $sale_name = $input_name;
    }
    
    // Validate address
    $input_sale_details = trim($_POST["sale_details"]);
    if(empty($input_sale_details)){
        $sale_details_err = "Please enter product details.";     
    } else{
        $sale_details = $input_sale_details;
    }
    
    // Validate salary
    $input_sale_retail_price = trim($_POST["sale_retail_price"]);
    if(empty($input_sale_retail_price)){
        $sale_retail_price_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_sale_retail_price)){
        $sale_retail_price_err = "Please enter a positive integer value.";
    } else{
        $sale_retail_price = $input_sale_retail_price;
    }
    
    // Check input errors before inserting in database
    if(empty($sale_name_err) && empty($sale_details_err) && empty($sale_retail_price_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO sales (sale_name, sale_details, sale_retail_price) VALUES (:sale_name, :sale_details, :sale_retail_price)";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":sale_name", $param_sale_name);
            $stmt->bindParam(":sale_details", $param_sale_details);
            $stmt->bindParam(":sale_retail_price", $param_sale_retail_price);
            
            // Set parameters
            $param_sale_name = $sale_name;
            $param_sale_details = $sale_details;
            $param_sale_retail_price = $sale_retail_price;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: ../user/sale.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>sale product Name</label>
                            <input type="text" name="sale_name" class="form-control <?php echo (!empty($sale_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sale_name; ?>">
                            <span class="invalid-feedback"><?php echo $sale_name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>sale product Details</label>
                            <textarea name="sale_details" class="form-control <?php echo (!empty($sale_details_err)) ? 'is-invalid' : ''; ?>"><?php echo $sale_details; ?></textarea>
                            <span class="invalid-feedback"><?php echo $sale_details_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Retail Price</label>
                            <input type="text" name="sale_retail_price" class="form-control <?php echo (!empty($sale_retail_price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sale_retail_price; ?>">
                            <span class="invalid-feedback"><?php echo $sale_retail_price_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../user/dashboard.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>