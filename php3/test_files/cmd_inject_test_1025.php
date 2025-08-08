<?php
// Command Injection test variation #1025
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>