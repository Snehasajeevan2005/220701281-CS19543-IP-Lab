<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Wok - Home</title>
    <link rel="icon" href="background.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styling for background image */
        .hero-bg {
            background-image: url('background.jpg'); /* Change this to the local image file name */
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
        }

        /* Overlay for better text contrast */
        .overlay {
            background: rgba(0, 0, 0, 0.6);
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Custom Button Style */
        .btn-primary {
            background-color: #d9534f; /* Red shade */
            border-color: #d43f00;
        }

        .btn-primary:hover {
            background-color: #c9302c;
            border-color: #ac2925;
        }

        .btn-success {
            background-color: #5bc0de;
            border-color: #46b8da;
        }

        .btn-success:hover {
            background-color: #31b0d5;
            border-color: #269abc;
        }

        /* Custom Footer */
        footer {
            background-color: #d9534f; /* Red shade */
            color: white;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        /* Custom Navbar */
        .navbar {
            background-color: #c9302c;
        }
        
        .navbar-brand, .nav-link {
            color: white !important;
        }
        
        .nav-link:hover {
            color: #f0ad4e !important;
        }
    </style>
</head>
<body>
    <!-- Hero Section with Background Image and Overlay -->
    <div class="hero-bg">
        <div class="overlay">
            <div class="container text-center">
                <h1 class="display-4 fw-bold">Welcome to Golden Wok</h1>
                <p class="lead">Savor the finest Asian cuisine in an unforgettable ambiance.</p>
                <a href="menu.php" class="btn btn-primary btn-lg m-2">Explore Menu</a>
                <a href="book.php" class="btn btn-success btn-lg m-2">Book a Table</a>
            
            </div>
        </div>
    </div>

   
    <!-- Footer -->
    <footer>
        <p>© 2024 Golden Wok. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
