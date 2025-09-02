<?php
// Hardcoded database credentials (Security Hotspot: S2077)
$servername = "localhost";
$username = "root";
$password = "password123";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input directly from query string (Security Hotspot: S5145, S5131)
$user = $_GET['user'];

// SQL Injection Vulnerability (CWE-89)
$sql = "SELECT * FROM users WHERE username = '$user'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // XSS Vulnerability (CWE-79)
        echo "Welcome " . $_GET['user'] . "<br>";
    }
} else {
    echo "No results found";
}

// Command Injection (CWE-78)
if (isset($_GET['cmd'])) {
    $output = shell_exec($_GET['cmd']); // Dangerous
    echo "<pre>$output</pre>";
}

$conn->close();
?>
