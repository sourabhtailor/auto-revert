<?php
// SQLi test variation #966
$conn = new mysqli("localhost", "root", "", "test_db");
$user = $_GET['user'] ?? '';
$sql = "SELECT * FROM accounts WHERE username = '$user'";
$conn->query($sql);
?>