<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST['ano'];

    $stmt = $conn->prepare("SELECT * FROM trans WHERE ANO = ? ORDER BY TDATE DESC");
    $stmt->bind_param("i", $ano);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h3>Transaction History for Account Number: $ano</h3>";
        echo "<table><tr><th>TID</th><th>Type</th><th>Date</th><th>Amount</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['TID'] . "</td><td>" . ($row['TTYPE'] == 'D' ? 'Deposit' : 'Withdrawal') . "</td><td>" . $row['TDATE'] . "</td><td>" . $row['TAMOUNT'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='error'>No transactions found for account number $ano.</p>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Transaction History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h2, h3 {
            text-align: center;
            color: #34495e;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: 0 auto 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: red;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

       

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: center;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: red;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h2>View Transaction History</h2>
<form action="view_transaction.php" method="POST">
    <label for="ano">Account Number:</label>
    <input type="number" id="ano" name="ano" required>

    <input type="submit" value="View Transactions">
</form>

</body>
</html>
