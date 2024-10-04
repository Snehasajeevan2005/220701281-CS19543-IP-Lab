<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cid = $_POST['cid'];
    $atype = $_POST['atype'];
    $balance = $_POST['balance'];
    
    $stmt = $conn->prepare("INSERT INTO ACCOUNT (ATYPE, BALANCE, CID) VALUES (?, ?, ?)");
    $stmt->bind_param("sdi", $atype, $balance, $cid);
    
    if ($stmt->execute()) {
        echo "<p class='success'>New account added successfully!</p>";
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
    <title>Banking Application - Manage Accounts</title>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 20px;
            padding: 0;
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
            margin: 0 auto 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
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
            margin-top: 20px;
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

<h2>Add a New Account</h2>
<form action="account.php" method="POST">
    <label for="cid">Customer ID:</label>
    <input type="number" id="cid" name="cid" required><br>

    <label for="atype">Account Type (S for Savings, C for Current):</label>
    <input type="text" id="atype" name="atype" maxlength="1" required><br>

    <label for="balance">Initial Balance:</label>
    <input type="number" step="0.01" id="balance" name="balance" required><br>

    <input type="submit" value="Add Account">
</form>

<h2>Existing Accounts</h2>
<?php
$result = $conn->query("SELECT * FROM ACCOUNT");
if ($result->num_rows > 0) {
    echo "<table><tr><th>ANO</th><th>Type</th><th>Balance</th><th>CID</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ANO"] . "</td><td>" . $row["ATYPE"] . "</td><td>" . $row["BALANCE"] . "</td><td>" . $row["CID"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p class='error'>No accounts found.</p>";
}
$conn->close();
?>

</body>
</html>
