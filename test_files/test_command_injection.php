<?php
// Command injection test
$user = $_GET['user'] ?? 'guest';
system("echo Hello $user");
?>