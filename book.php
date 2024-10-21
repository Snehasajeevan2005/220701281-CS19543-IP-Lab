<?php
$booking_successful = false;  // Flag to determine whether to display booking details

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    // Database connection (add your DB credentials here)
    $conn = new mysqli('localhost', 'root', '', 'goldenwok');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "INSERT INTO bookings (name, email, date, time, guests) VALUES ('$name', '$email', '$date', '$time', '$guests')";

    if ($conn->query($sql) === TRUE) {
        $booking_successful = true;  // Set flag to true if booking was successful
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Wok - Book a Table</title>
    <link rel="icon" href="background.jpg" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background image for the entire page */
        body {
            background-image: url('rest.jpg'); /* Add your image URL here */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            
        }


        /* Adjusted the form container size */
        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            padding: 20px; /* Reduced padding */
            border-radius: 10px;
            max-width: 450px; /* Reduced width */
            margin-top: 100px;
        }

               .form-label {
            font-size: 1.1rem; /* Slightly smaller label font size */
            color:white;
        }

        .form-control {
            border: 2px solid #ffcc00;
            border-radius: 5px;
            padding: 8px; /* Reduced padding */
        }

        .btn-primary {
            background-color: #e74c3c;
            border: none;
            padding: 8px 15px; /* Reduced button size */
            font-size: 1rem; /* Reduced button font size */
            border-radius: 5px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #c0392;
        }

        /* Success message with animation */
        @keyframes bounce {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        .thank-you-message {
            text-align: center;
            margin-top: 20px;
            font-size: 1.3rem; /* Reduced font size */
        }

        .emoji {
            font-size: 2.5rem; /* Reduced emoji size */
            animation: bounce 1s infinite;
        }
        h2{
           color:white;
           background-color:white;

              }
        /* Booking details card styling */
        .card {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            color: black;
        }

        /* Make sure it is responsive */
        @media (max-width: 768px) {
            .container {
                margin-top: 50px;
                max-width: 90%; /* Adjust width for smaller screens */
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
       
        <?php if ($booking_successful): ?>
            <div class="alert alert-success text-center">
                Booking successful! Here are your booking details:
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Booking Details</h5>
                    <p class="card-text">
                        <strong>Name:</strong> <?php echo $name; ?><br>
                        <strong>Email:</strong> <?php echo $email; ?><br>
                        <strong>Date:</strong> <?php echo $date; ?><br>
                        <strong>Time:</strong> <?php echo $time; ?><br>
                        <strong>Guests:</strong> <?php echo $guests; ?><br>
                    </p>
                </div>
            </div>

            <div class="thank-you-message">
                <p>Thank you for booking at Golden Wok!</p>
                <div class="emoji">🎉</div>
            </div>
        <?php else: ?>
            <form action="book.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>
                <div class="mb-3">
                    <label for="guests" class="form-label">Guests</label>
                    <input type="number" class="form-control" id="guests" name="guests" required>
                </div>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
        <?php endif; ?>
    </div>

    
    

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>