<?php
// Command Injection test variation #1123
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>