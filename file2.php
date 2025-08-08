<?php
// sample_test.php
session_start();

// Basic login check
if (isset($_POST['username'], $_POST['password'])) {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'password') {
        $_SESSION['logged_in'] = true;
        echo "<p>Welcome, admin!</p>";
    } else {
        echo "<p>Invalid credentials</p>";
    }
}

// SQLi simulation
$conn = new mysqli("localhost", "root", "", "test_db");
$search = $_GET['search'] ?? '';
$query = "SELECT * FROM users WHERE name LIKE '%$search%'";
$result = @$conn->query($query);

// Display results
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . htmlspecialchars($row['name']) . "<br>";
    }
}

// XSS test
$xss = $_GET['msg'] ?? '';
echo "<div>Message: $xss</div>";

// File inclusion
$page = $_GET['page'] ?? '';
if ($page) {
    include($page);
}

// Command injection test
$cmd = $_GET['cmd'] ?? '';
if ($cmd) {
    echo "<pre>";
    system($cmd);
    echo "</pre>";
}
?>

<!-- Login form -->
<form method="POST">
    <h2>Login</h2>
    Username: <input type="text" name="username" />
    Password: <input type="password" name="password" />
    <input type="submit" value="Login" />
</form>

<!-- Search form -->
<form method="GET">
    <h2>Search Users</h2>
    <input type="text" name="search" />
    <input type="submit" value="Search" />
</form>

<!-- XSS form -->
<form method="GET">
    <h2>XSS Test</h2>
    <input type="text" name="msg" />
    <input type="submit" value="Send Message" />
</form>

<!-- File inclusion test -->
<form method="GET">
    <h2>File Include Test</h2>
    <input type="text" name="page" placeholder="e.g., test.php" />
    <input type="submit" value="Include File" />
</form>

<!-- Command execution test -->
<form method="GET">
    <h2>Command Execution Test</h2>
    <input type="text" name="cmd" placeholder="e.g., ls" />
    <input type="submit" value="Run Command" />
</form>
