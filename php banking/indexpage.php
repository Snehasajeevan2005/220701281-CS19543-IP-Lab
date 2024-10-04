<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Application</title>
    <style>
        /* General styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container to center content */
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        /* Heading style */
        h1 {
            color: #2c3e50;
            font-size: 36px;
            margin-bottom: 20px;
        }

        /* Navigation list styling */
        ul {
            list-style-type: none;
            padding: 0;
        }

        /* Styling individual list items */
        ul li {
            margin: 10px 0;
        }

        /* Link styling */
        ul li a {
            display: inline-block;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            color: white;
            background-color: red;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

       
    </style>
</head>
<body>
    <div class="container">
        <h1>Banking Application</h1>
        <ul>
            <li><a href="customer.php">Manage Customers</a></li>
            <li><a href="account.php">Manage Accounts</a></li>
            <li><a href="transaction.php">Manage Transactions</a></li>
            <li><a href="view_transaction.php">View Transaction History</a></li>
        </ul>
    </div>
</body>
</html>
