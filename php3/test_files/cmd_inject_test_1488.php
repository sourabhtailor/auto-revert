<?php
// Command Injection test variation #1488
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>