<?php
if(isset($_GET['item']) && isset($_GET['price'])) {
    $item = $_GET['item'];
    $price = $_GET['price'];
} else {
    // Redirect to menu page if no item is selected
    header('Location: menu.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Red Theme Styling */
        body {
            background-color: #f8f8f8;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h2 {
            color: #e74c3c;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            color: #333;
            font-weight: bold;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #e74c3c;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #c0392b;
        }

        /* Red custom button */
        .btn-custom {
            background-color: #e74c3c;
            color: white;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #c0392b;
        }

        .payment-summary {
            background-color: #f2dede;
            color: #a94442;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .payment-success {
            display: none;
            text-align: center;
            color: #27ae60;
            margin-top: 20px;
        }

        .payment-success h3 {
            font-size: 24px;
            color: #27ae60;
        }

        .payment-success span {
            font-size: 48px;
            color: #27ae60;
        }

        .card-icon {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .card-icon img {
            width: 100px;
        }
    </style>
</head>
<body>
 <?php include 'navbar.php'; ?>
    <div class="container">
        <h2>Complete Your Payment</h2>

        <div class="payment-summary text-center">
            <h4>You are purchasing: <strong><?php echo $item; ?></strong></h4>
            <p>Total Amount: <strong>₹<?php echo $price; ?></strong></p>
        </div>

        <div class="card-icon">
            <img src="credit-card-icon.png" alt="Credit Card">
        </div>

        <!-- Payment form -->
        <form id="payment-form">
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456">
            </div>
            <div class="mb-3">
                <label for="expiryDate" class="form-label">Expiry Date</label>
                <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
            </div>
            <div class="mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" placeholder="123">
            </div>
            <button type="submit" class="btn btn-danger">Pay Now</button>
        </form>

        <div class="payment-success" id="payment-success">
            <span>&#10003;</span>
            <h3>Payment Successful!</h3>
        </div>
    </div>

    <script>
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Simulate payment process
            setTimeout(function() {
                document.getElementById('payment-success').style.display = 'block';
            }, 1000);
        });
    </script>
  <?php include 'footer.php'; ?>

</body>
</html>
 	