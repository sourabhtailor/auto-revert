<?php
// Command Injection test variation #476
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>