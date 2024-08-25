<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = "mysql-service";
$username = "admin";
$password = "Password123";
$dbname = "students";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8mb4");

    $name = $_POST['name'] ?? '';

    if (empty($name)) {
        throw new Exception("Name field is empty.");
    }

    $stmt = $conn->prepare("INSERT INTO users (Name) VALUES (?)");
    $stmt->bind_param("s", $name);

    if ($stmt->execute()) {
        $_SESSION['message'] = "New record created successfully";
    } else {
        throw new Exception("Error executing query: " . $stmt->error);
    }

    // Redirect immediately before any output
    header("Location: index.php");
    exit();

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $stmt->close();
    $conn->close();
}
?>
