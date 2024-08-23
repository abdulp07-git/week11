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

// Get the name from POST data
$name = $_POST['name'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (Name) VALUES (?)");
$stmt->bind_param("s", $name);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();

// Redirect back to the home page
header("Location: index.php");
exit();
?>

