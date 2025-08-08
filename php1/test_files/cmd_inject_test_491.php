<?php
// Command Injection test variation #491
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>