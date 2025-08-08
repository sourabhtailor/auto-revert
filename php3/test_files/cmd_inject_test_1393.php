<?php
// Command Injection test variation #1393
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>