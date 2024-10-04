<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "EmployeeDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Create, Read, Update, Delete operations based on form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action == "create") {
        createEmployee($conn, $_POST['empid'], $_POST['name'], $_POST['designation'], $_POST['department'], $_POST['doj'], $_POST['salary']);
    } elseif ($action == "update") {
        updateEmployee($conn, $_POST['empid'], $_POST['salary']);
    } elseif ($action == "delete") {
        deleteEmployee($conn, $_POST['empid']);
    }
}

// Create employee record
function createEmployee($conn, $empid, $name, $designation, $dept, $doj, $salary) {
    $sql = "INSERT INTO EMPDETAILS (EMPID, ENAME, DESIG, DEPT, DOJ, SALARY)
            VALUES ('$empid', '$name', '$designation', '$dept', '$doj', '$salary')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New employee created successfully.<br>";
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

// Update employee salary
function updateEmployee($conn, $empid, $salary) {
    $sql = "UPDATE EMPDETAILS SET SALARY = '$salary' WHERE EMPID = '$empid'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Employee salary updated successfully.<br>";
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

// Delete employee record
function deleteEmployee($conn, $empid) {
    $sql = "DELETE FROM EMPDETAILS WHERE EMPID = '$empid'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully.<br>";
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

// Display employee records
function displayEmployees($conn) {
    $sql = "SELECT * FROM EMPDETAILS";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr><th>EMPID</th><th>ENAME</th><th>DESIG</th><th>DEPT</th><th>DOJ</th><th>SALARY</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["EMPID"] . "</td><td>" . $row["ENAME"] . "</td><td>" . $row["DESIG"] . "</td>
                  <td>" . $row["DEPT"] . "</td><td>" . $row["DOJ"] . "</td><td>" . $row["SALARY"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No employees found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee CRUD Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
         
        }

        h2 {
            text-align: center;
            color:black;
            
            
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h3 {
            text-align: center;
            color: #333;
            }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Employee Management</h2>

    <!-- Form to handle Create, Update, Delete -->
    <form method="POST" action="">
        <label for="empid">Employee ID:</label>
        <input type="number" name="empid" required><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name"><br><br>

        <label for="designation">Designation:</label>
        <input type="text" name="designation"><br><br>

        <label for="department">Department:</label>
        <input type="text" name="department"><br><br>

        <label for="doj">Date of Joining (YYYY-MM-DD):</label>
        <input type="date" name="doj"><br><br>

        <label for="salary">Salary:</label>
        <input type="number" step="0.01" name="salary"><br><br>

        <!-- Action buttons -->
        <input type="submit" name="action" value="create"> Create Employee<br><br>
        <input type="submit" name="action" value="update"> Update Employee Salary<br><br>
        <input type="submit" name="action" value="delete"> Delete Employee<br><br>
    </form>

    <h3>Employee Records:</h3>
    <?php
    // Display employees
    displayEmployees($conn);
    ?>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>
