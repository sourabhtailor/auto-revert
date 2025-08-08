<?php
// Command Injection test variation #1476
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>