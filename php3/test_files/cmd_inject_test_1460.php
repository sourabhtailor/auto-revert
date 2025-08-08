<?php
// Command Injection test variation #1460
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>