<?php
// Step 1: Connect to database
$host = "localhost";
$username = "root";
$password = "";
$database = "test_db";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Write SQL query
$sql = "SELECT id, name FROM users";

// Step 3: Execute query
$result = $conn->query($sql);

// Step 4: Display results
if ($result->num_rows > 0) {
    echo "<h3>User List:</h3>";
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>ID: " . $row["id"] . " - Name: " . $row["name"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}

// Step 5: Close connection
$conn->close();
?>
