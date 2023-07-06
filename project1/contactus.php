<?php
// Database configuration
$host = "localhost";  // Replace with your database host
$username = "root";  // Replace with your database username
$password = "";  // Replace with your database password
$dbname = "contactus";

// Establish a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $NAME = $_POST["fullName"];
    $EMAIL = $_POST["email"];
    $MESSAGE = $_POST["message"];
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO c_info (NAME,EMAIL,MESSAGE) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $NAME, $EMAIL, $MESSAGE);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
        header("Location: home2.php");
        exit; 
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?> 