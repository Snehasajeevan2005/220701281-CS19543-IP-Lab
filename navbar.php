<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Wok Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styling for Navbar */
        .navbar {
            background-color: #e74c3c; /* Red Background */
        }

        .navbar-brand {
            font-family: 'Arial', sans-serif;
            font-size: 1.8rem;
            letter-spacing: 2px;
            color: #fff !important;
            font-weight: bold;
            transition: transform 0.2s ease-in-out;
        }

        .navbar-brand:hover {
            transform: scale(1.1);
        }

        .nav-link {
            color: #fff !important;
            font-size: 1rem;
            margin-right: 15px;
        }

        .nav-link:hover {
            color: #f1c40f !important;
        }

       
        .search-box {
            display: flex;
            align-items: center;
        }

        .search-box input {
            border: 2px solid #f1c40f;
            padding: 5px;
            margin-right: 10px;
            border-radius: 5px;
        }

        .search-box button {
            background-color: #f1c40f;
            border: none;
            color: white;
            padding: 7px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-box button:hover {
            background-color: #e67e22;
        }

       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Golden Wok</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="book.php">Book a Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
               
                    <a class="nav-link" href="About Us.php">About Us</a>
                </li>
               
            </ul>

            <!-- Search Box -->
            <div class="search-box ms-auto">
                <input type="text" id="searchQuery" placeholder="Search items..." class="form-control">
                <button onclick="searchItem()">Search</button>
            </div>
        </div>
    </nav>

   <script>
    // Search Functionality
    function searchItem() {
        var query = document.getElementById('searchQuery').value.toLowerCase();
        
        // Get all cards on the menu page
        var items = document.querySelectorAll('.card');
        var found = false;

        // Loop through the items to match the search query with the card title
        items.forEach(function(item) {
            var title = item.querySelector('.card-title').innerText.toLowerCase(); // Get the card title
            if (title.includes(query)) {
                item.scrollIntoView({ behavior: 'smooth' }); // Scroll to the matching card
                found = true;
            }
        });

        if (!found) {
            alert("Item not found. Please try again.");
        }
    }
</script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
