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
</head>
<body>
    <h1>List of Names</h1>
    
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["Name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    
    // Close connection
    $conn->close();
    ?>
    
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>

