<?php
// Database connection settings

$servername = "mysql-service";
$username = "admin";
$password = "Password123";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select all names from the users table
$sql = "SELECT Name FROM users";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Names</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }

        table {
            margin-top: 20px;
        }

        .table th,
        .table td {
            text-align: center;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>List of Names</h1>
        
        <?php
        if ($result->num_rows > 0) {
            echo '<table class="table table-striped">';
            echo '<thead><tr><th>Name</th></tr></thead>';
            echo '<tbody>';
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<tr><td>' . $row["Name"] . '</td></tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<p class="text-center">No results found</p>';
        }
        
        // Close connection
        $conn->close();
        ?>
        
        <a href="index.php" class="back-link">Back to Home</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


