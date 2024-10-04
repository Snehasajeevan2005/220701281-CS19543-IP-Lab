<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = $_POST['cname'];
    
    $stmt = $conn->prepare("INSERT INTO CUSTOMER (CNAME) VALUES (?)");
    $stmt->bind_param("s", $cname);
    
    if ($stmt->execute()) {
        echo "<p class='success'>New customer added successfully!</p>";
    } else {
        echo "<p class='error'>Error: " . $stmt->error . "</p>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Application - Manage Customers</title>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Form styling */
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            text-align: center;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: red;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Success and error messages */
        .success {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h2>Add a New Customer</h2>
<form action="customer.php" method="POST">
    <label for="cname">Customer Name:</label>
    <input type="text" id="cname" name="cname" required><br>
    <input type="submit" value="Add Customer">
</form>

<h2>Existing Customers</h2>
<?php
$result = $conn->query("SELECT * FROM CUSTOMER");
if ($result->num_rows > 0) {
    echo "<table><tr><th>CID</th><th>Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["CID"] . "</td><td>" . $row["CNAME"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p class='error'>No customers found.</p>";
}
$conn->close();
?>

</body>
</html>
