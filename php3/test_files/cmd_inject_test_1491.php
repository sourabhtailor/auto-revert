<?php
// Command Injection test variation #1491
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>