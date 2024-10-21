<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Golden Wok</title>
    <link rel="icon" href="background.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        /* Header Section */
        .header {
            background-color: #e74c3c;
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        /* Gallery Section */
        .gallery-section {
            padding: 50px 0;
        }

        .gallery-section h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #e74c3c;
            margin-bottom: 50px;
        }

        .gallery-item {
            margin-bottom: 30px;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .gallery-item:hover img {
            transform: scale(1.05);
            transition: 0.3s;
        }

        .gallery-item .caption {
            text-align: center;
            margin-top: 10px;
            color: #555;
            font-size: 1.1rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .gallery-section h2 {
                font-size: 2rem;
            }

            .gallery-item img {
                border-radius: 5px;
            }
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
    <!-- Header Section -->
    <div class="header">
        <h1>Golden Wok Gallery</h1>

        <p>Discover Our Exquisite Chinese Dishes and Ambiance</p>
    </div>

    <!-- Gallery Section -->
    <div class="container gallery-section">
        <h2>Our Delicious Creations</h2>
        <div class="row">
            <!-- Gallery Item 1 -->
            <div class="col-md-4 gallery-item">
                <img src="dim-sum.jpg" alt="Delicious Dimsum" class="img-fluid">
                <div class="caption">Delicious Dimsum</div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="col-md-4 gallery-item">
                <img src="vegetable-chow-mein.jpg" alt="Spicy Chow Mein" class="img-fluid">
                <div class="caption">Spicy Chow Mein</div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="col-md-4 gallery-item">
                <img src="shrimp-fried-rice.jpg" alt="Special Fried Rice" class="img-fluid">
                <div class="caption">Special Fried Rice</div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="col-md-4 gallery-item">
                <img src="hotpot.jpg" alt="Authentic Hot Pot" class="img-fluid">
                <div class="caption">Authentic Hot Pot</div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="col-md-4 gallery-item">
                <img src="spring-rolls.jpg" alt="Crispy Spring Rolls" class="img-fluid">
                <div class="caption">Crispy Spring Rolls</div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="col-md-4 gallery-item">
                <img src="szechuan-chicken.jpg" alt="Szechuan Chicken" class="img-fluid">
                <div class="caption">Szechuan Chicken</div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="col-md-4 gallery-item">
                <img src="sweet-and-sour.jpg" alt="Sweet & Sour Pork" class="img-fluid">
                <div class="caption">Sweet & Sour Pork</div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="col-md-4 gallery-item">
                <img src="tea.jpg" alt="Traditional Chinese Tea" class="img-fluid">
                <div class="caption">Traditional Chinese Tea</div>
            </div>

            <!-- Gallery Item 9 -->
            <div class="col-md-4 gallery-item">
                <img src="dessert.jpg" alt="Exquisite Chinese Dessert" class="img-fluid">
                <div class="caption">Exquisite Chinese Dessert</div>
            </div>
            <h2>Golden Wok</h2>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="c1.jpg" class="d-block w-100" alt="Traditional Chinese Tea">
            <div class="carousel-caption d-none d-md-block">
                <h5>Golden Wok Restraursnt</h5>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="c2.jpg" class="d-block w-100" alt="Traditional Chinese Tea">
            <div class="carousel-caption d-none d-md-block">
                <h5>Golden Wok Restraursnt<</h5>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="c3.jpg" class="d-block w-100" alt="Traditional Chinese Tea">
            <div class="carousel-caption d-none d-md-block">
                <h5>Golden Wok Restraursnt</h5>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    </div>

    <!-- Footer Section -->
    <div class="text-center py-4" style="background-color: #333; color: white;">
        <p>&copy; 2024 Golden Wok | All Rights Reserved | Designed with ❤ in Chennai</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
