<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Wok - Menu</title>
    <link rel="icon" href="background.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styling for the Menu Page */
        body {
            background-color: #f8f9fa; /* Light background for contrast */
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            overflow: hidden; /* Ensures images do not overflow the card */
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 200px; /* Fixed height */
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 10px 10px 0 0;
        }

        .btn-custom:hover {
            background-color: #c0392b;
        }

        .container {
            padding-top: 50px;
        }

        /* Responsive layout */
        .card-deck {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .col-md-4 {
            flex: 0 0 calc(33.333% - 20px);
        }

        .heading {
            font-size: 2.5rem; /* Larger font size for headings */
            color: #d35400; /* Attractive color for headings */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
            margin-bottom: 20px; /* Spacing below headings */
            text-align: center; /* Center the headings */
        }

        /* Additional spacing for sections */
        .section {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h1 class="heading">Our Menu</h1>
        <p class="text-center mb-5">Enjoy a variety of Asian delicacies prepared with love.</p>

        <!-- Appetizers Section -->
        <div class="section">
            <h2 class="heading">Appetizers</h2>
            <div class="card-deck">
                <div class="card">
                    <img src="spring-rolls.jpg" class="card-img-top" alt="Spring Rolls">
                    <div class="card-body">
                        <h5 class="card-title">Spring Rolls</h5>
                        <p class="card-text">Crispy spring rolls stuffed with vegetables and served with sweet chili sauce.</p>
                        <p class="card-text"><strong>Price: ₹200</strong></p>
                        <a href="payment.php?item=Spring Rolls&price=200" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="dim-sum.jpg" class="card-img-top" alt="Dim Sum">
                    <div class="card-body">
                        <h5 class="card-title">Dim Sum</h5>
                        <p class="card-text">Steamed dumplings filled with pork and shrimp, served with soy dipping sauce.</p>
                        <p class="card-text"><strong>Price: ₹400</strong></p>
                        <a href="payment.php?item=Dim Sum&price=400" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="wonton-soup.jpg" class="card-img-top" alt="Wonton Soup">
                    <div class="card-body">
                        <h5 class="card-title">Wonton Soup</h5>
                        <p class="card-text">Delicious wontons in a rich chicken broth with vegetables.</p>
                        <p class="card-text"><strong>Price: ₹250</strong></p>
                        <a href="payment.php?item=Wonton Soup&price=250" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="potstickers.jpg" class="card-img-top" alt="Potstickers">
                    <div class="card-body">
                        <h5 class="card-title">Potstickers</h5>
                        <p class="card-text">Pan-fried dumplings filled with pork and cabbage, served with dipping sauce.</p>
                        <p class="card-text"><strong>Price: ₹350</strong></p>
                        <a href="payment.php?item=Potstickers&price=350" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="crispy-tofu.jpg" class="card-img-top" alt="Crispy Tofu">
                    <div class="card-body">
                        <h5 class="card-title">Crispy Tofu</h5>
                        <p class="card-text">Golden-fried tofu served with a sweet and sour sauce.</p>
                        <p class="card-text"><strong>Price: ₹550</strong></p>
                        <a href="payment.php?item=Crispy Tofu&price=550" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Course Section -->
        <div class="section">
            <h2 class="heading">Main Course</h2>
            <div class="card-deck">
                <div class="card">
                    <img src="general-tsos-chicken.jpg" class="card-img-top" alt="General Tso's Chicken">
                    <div class="card-body">
                        <h5 class="card-title">General Tso's Chicken</h5>
                        <p class="card-text">Crispy chicken in a flavorful and spicy sauce with a hint of sweetness.</p>
                        <p class="card-text"><strong>Price: ₹650</strong></p>
                        <a href="payment.php?item=General Tso's Chicken&price=650" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="beef-broccoli.jpg" class="card-img-top" alt="Beef with Broccoli">
                    <div class="card-body">
                        <h5 class="card-title">Beef with Broccoli</h5>
                        <p class="card-text">Tender beef stir-fried with fresh broccoli in a savory brown sauce.</p>
                        <p class="card-text"><strong>Price: ₹559</strong></p>
                        <a href="payment.php?item=Beef with Broccoli&price=559" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="kung-pao-shrimp.jpg" class="card-img-top" alt="Kung Pao Shrimp">
                    <div class="card-body">
                        <h5 class="card-title">Kung Pao Shrimp</h5>
                        <p class="card-text">Shrimp stir-fried with peanuts, green peppers, and a spicy, tangy sauce.</p>
                        <p class="card-text"><strong>Price: ₹499</strong></p>
                        <a href="payment.php?item=Kung Pao Shrimp&price=499" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="chicken-lo-mein.jpg" class="card-img-top" alt="Chicken Lo Mein">
                    <div class="card-body">
                        <h5 class="card-title">Chicken Lo Mein</h5>
                        <p class="card-text">Stir-fried noodles with chicken and mixed vegetables.</p>
                        <p class="card-text"><strong>Price: ₹299</strong></p>
                        <a href="payment.php?item=Chicken Lo Mein&price=299" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="shrimp-fried-rice.jpg" class="card-img-top" alt="Shrimp Fried Rice">
                    <div class="card-body">
                        <h5 class="card-title">Shrimp Fried Rice</h5>
                        <p class="card-text">Fried rice with shrimp, egg, peas, and carrots.</p>
                        <p class="card-text"><strong>Price: ₹299</strong></p>
                        <a href="payment.php?item=Shrimp Fried Rice&price=299" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="vegetable-chow-mein.jpg" class="card-img-top" alt="Vegetable Chow Mein">
                    <div class="card-body">
                        <h5 class="card-title">Vegetable Chow Mein</h5>
                        <p class="card-text">Noodles stir-fried with fresh vegetables and soy sauce.</p>
                        <p class="card-text"><strong>Price: ₹199</strong></p>
                        <a href="payment.php?item=Vegetable Chow Mein&price=199" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desserts Section -->
        <div class="section">
            <h2 class="heading">Desserts</h2>
            <div class="card-deck">
                <div class="card">
                    <img src="mango-sticky-rice.jpg" class="card-img-top" alt="Mango Sticky Rice">
                    <div class="card-body">
                        <h5 class="card-title">Mango Sticky Rice</h5>
                        <p class="card-text">Sweet sticky rice served with fresh mango slices and a drizzle of coconut milk.</p>
                        <p class="card-text"><strong>Price: ₹199 </strong></p>
                        <a href="payment.php?item=Mango Sticky Rice&price=199" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="fried-ice-cream.jpg" class="card-img-top" alt="Fried Ice Cream">
                    <div class="card-body">
                        <h5 class="card-title">Fried Ice Cream</h5>
                        <p class="card-text">A crispy, golden coating surrounds a scoop of creamy vanilla ice cream.</p>
                        <p class="card-text"><strong>Price: ₹99</strong></p>
                        <a href="payment.php?item=Fried Ice Cream&price=99" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="fortune-cookies.jpg" class="card-img-top" alt="Fortune Cookies">
                    <div class="card-body">
                        <h5 class="card-title">Fortune Cookies</h5>
                        <p class="card-text">Crispy cookies with a hidden fortune inside, perfect to end your meal.</p>
                        <p class="card-text"><strong>Price: ₹79</strong></p>
                        <a href="payment.php?item=Fortune Cookies&price=79" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="mochi.jpg" class="card-img-top" alt="Mochi">
                    <div class="card-body">
                        <h5 class="card-title">Mochi</h5>
                        <p class="card-text">Sweet rice cake filled with ice cream, available in various flavors.</p>
                        <p class="card-text"><strong>Price: ₹79</strong></p>
                        <a href="payment.php?item=Mochi&price=79" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
                <div class="card">
                    <img src="sesame-balls.jpg" class="card-img-top" alt="Sesame Balls">
                    <div class="card-body">
                        <h5 class="card-title">Sesame Balls</h5>
                        <p class="card-text">Fried sesame seed balls filled with sweet red bean paste.</p>
                        <p class="card-text"><strong>Price: ₹59</strong></p>
                        <a href="payment.php?item=Sesame Balls&price=59" class="btn btn-danger">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
