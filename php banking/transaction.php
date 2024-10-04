<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST['ano'];
    $ttype = $_POST['ttype'];
    $tamount = $_POST['tamount'];

    $result = $conn->query("SELECT BALANCE FROM ACCOUNT WHERE ANO = $ano");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_balance = $row['BALANCE'];

        if ($ttype == 'D') {
            $new_balance = $current_balance + $tamount;
        } elseif ($ttype == 'W') {
            if ($tamount > $current_balance) {
                echo "<p class='error'>Error: Insufficient balance.</p>";
                exit();
            }
            $new_balance = $current_balance - $tamount;
        } else {
            echo "<p class='error'>Error: Invalid transaction type.</p>";
            exit();
        }

        $stmt = $conn->prepare("INSERT INTO TRANS (ANO, TTYPE, TDATE, TAMOUNT) VALUES (?, ?, CURDATE(), ?)");
        $stmt->bind_param("isd", $ano, $ttype, $tamount);
        $stmt->execute();

        $stmt_update = $conn->prepare("UPDATE ACCOUNT SET BALANCE = ? WHERE ANO = ?");
        $stmt_update->bind_param("di", $new_balance, $ano);
        $stmt_update->execute();

        echo "<p class='success'>Transaction successful! New balance: $" . $new_balance . "</p>";
        $stmt->close();
        $stmt_update->close();
    } else {
        echo "<p class='error'>Error: Account not found.</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Application - Perform Transaction</title>
    <style>
        /* General styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        /* Form styling */
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        input[type="text"], input[type="number"] {
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
        }

       

        /* Message styling */
        .success {
            color: green;
            text-align: center;
            margin-top: 20px;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
        }

        /* Table styling */
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
    </style>
</head>
<body>

<h2>Perform a Transaction</h2>
<form action="transaction.php" method="POST">
    <label for="ano">Account Number:</label>
    <input type="number" id="ano" name="ano" required>

    <label for="ttype">Transaction Type (D for Deposit, W for Withdrawal):</label>
    <input type="text" id="ttype" name="ttype" maxlength="1" required>

    <label for="tamount">Amount:</label>
    <input type="number" step="0.01" id="tamount" name="tamount" required>

    <input type="submit" value="Submit Transaction">
</form>

</body>
</html>
