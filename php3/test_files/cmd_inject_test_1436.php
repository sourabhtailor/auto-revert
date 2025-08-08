<?php
// Command Injection test variation #1436
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>