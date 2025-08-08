<?php
// Command Injection test variation #1099
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>