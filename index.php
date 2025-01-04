<?php
// Step 1: Verify Apache is Running
echo "<h1>Apache Server is Running Successfully!</h1>";

// Step 2: Test MySQL Connection
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = ""; // Default MySQL password for XAMPP/WAMP (leave empty if default)

// Create Connection
$conn = new mysqli($servername, $username, $password);

// Check Connection
if ($conn->connect_error) {
    die("<p style='color:red;'>MySQL Connection Failed: " . $conn->connect_error . "</p>");
} else {
    echo "<p style='color:green;'>MySQL Connection Successful!</p>";
}

// Close the Connection
$conn->close();
?>
