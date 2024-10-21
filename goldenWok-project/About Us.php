<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Golden Wok</title>
    <link rel="icon" href="background.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        /* Header Styling */
        .header {
            background-color: #e74c3c;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        /* About Section Styling */
        .about-section {
            background-color: white;
            padding: 50px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .about-text {
            color: #333;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-text h2 {
            font-size: 2.5rem;
            color: #e74c3c;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Contact Info Section */
        .contact-info {
            margin-top: 30px;
        }

        .contact-info h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 1.1rem;
            color: #555;
        }

        /* Founder Section */
        .founder-section {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .founder-image {
            max-width: 200px;
            margin-right: 20px;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .founder-text {
            max-width: 800px;
        }

        .founder-text h3 {
            font-size: 2rem;
            color: #e74c3c;
            margin-bottom: 10px;
        }

        /* Map Section Styling */
        .map-section {
            margin-top: 30px;
        }

        .map-section h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .about-text h2, .contact-info h2 {
                font-size: 2rem;
            }

            .founder-image {
                margin: 0 auto 20px auto;
                display: block;
            }

            .founder-section {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
    <!-- Header Section -->
    <div class="header">
        <h1>Welcome to Golden Wok</h1>
        <p>Your Premier Destination for Authentic Chinese Cuisine</p>
    </div>

    <!-- About Section -->
    <div class="container about-section">
        <div class="row">
            <div class="col-md-12 about-text">
                <h2>About Us</h2>
                <p>Golden Wok was founded with a mission to bring the most authentic Chinese flavors to the heart of Chennai. We are passionate about providing our guests with the finest ingredients and cooking methods to deliver mouth-watering dishes inspired by China’s rich culinary heritage.</p>
                <p>Our expert chefs meticulously craft each dish with a balance of taste, texture, and aroma, ensuring an unforgettable dining experience for every guest. From traditional favorites like Dim Sum, Chow Mein, and Hot Pot to modern Chinese fusion dishes, we offer a diverse and exciting menu suitable for all tastes.</p>
                <p>Our restaurant offers a warm and inviting ambiance, perfect for a family dinner, a romantic evening, or even business meetings. Whether you're looking to explore new flavors or indulge in familiar classics, Golden Wok is the place to be.</p>
            </div>
        </div>
    </div>

    <!-- Founder Section -->
    <div class="container founder-section">
        <img src="sneha.jpeg" alt="Sneha Sajeevan - Founder" class="founder-image">
        <div class="founder-text">
            <h3>Founder: Sneha Sajeevan</h3>
            <p>Sneha Sajeevan, the visionary behind Golden Wok, has always been passionate about bringing the best of Chinese cuisine to Chennai. With a background in culinary arts and a deep love for Chinese food, Sneha started Golden Wok with the idea of offering authentic and delicious meals that cater to every taste.</p>
        </div>
    </div>

    <!-- Contact Info Section -->
    <div class="container contact-info">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Information</h2>
                <p><strong>Phone:</strong> <a href="tel:+6369574638">63695 74638</a></p>
                <p><strong>Email:</strong> goldenwokchennai@gmail.com</p>
                <p><strong>Location:</strong> Thousand Lights, Chennai, Tamil Nadu 600006</p>
                <p><strong>Chefs:</strong></p>
                <ul>
                    <li><strong>Chef Ming Wei</strong> – Head Chef, specializing in traditional Chinese dishes</li>
                    <li><strong>Chef Li Zhang</strong> – Expert in fusion cuisine</li>
                    <li><strong>Chef Hui Fan</strong> – Master of Dim Sum and noodle dishes</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Location and Map Section -->
    <div class="container map-section">
        <div class="row">
            <div class="col-md-12">
                <h2>Find Us</h2>
                <p>We are located in the vibrant Thousand Lights area of Chennai, a perfect spot for a meal after exploring the nearby attractions. You can easily find us using the map below.</p>

                <!-- Google Map Embed using iframe -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15546.418327641299!2d80.24426461919853!3d13.060822798978625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52666a8ea87281%3A0x154f12cb0080f2b5!2sZaitoon%20Restaurant%2C%20Nungambakkam!5e0!3m2!1sen!2sin!4v1729513998110!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="text-center py-4" style="background-color: #333; color: white;">
        <p>&copy; 2024 Golden Wok | All Rights Reserved | Designed with ❤ in Chennai</p>
    </div>

</body>
</html>
