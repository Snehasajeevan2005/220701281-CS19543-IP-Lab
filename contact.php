<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Golden Wok </title>
    <link rel="icon" href="background.jpg" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    /* Container Styling */
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    h1 {
        color: #e74c3c; /* Red Theme */
        text-align: center;
        margin-bottom: 20px;
        font-family: 'Arial', sans-serif;
        font-size: 2.5rem;
        font-weight: bold;
    }

    p {
        text-align: center;
        font-size: 1.1rem;
        margin-bottom: 40px;
        color: #333;
        font-family: 'Arial', sans-serif;
    }

    /* Form Styling */
    form {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border: 2px solid #e74c3c; /* Red Border */
        border-radius: 5px;
        padding: 10px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #c0392b;
        box-shadow: none;
    }

    .btn-primary {
        background-color: #e74c3c;
        border: none;
        padding: 10px 20px;
        font-size: 1.1rem;
        font-weight: bold;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #c0392b;
    }

    .btn-primary:active {
        background-color: #a93226;
    }

    /* Responsive Styles */
    @media (max-width: 576px) {
        h1 {
            font-size: 2rem;
        }

        p {
            font-size: 1rem;
        }

        .btn-primary {
            font-size: 1rem;
        }
    }
</style>

<body>
<?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1>Contact Us</h1>
        <p>If you have any questions or would like to make a special request, feel free to contact us!</p>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-danger">Send Message</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
