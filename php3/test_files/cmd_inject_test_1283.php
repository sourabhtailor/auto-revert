<?php
// Command Injection test variation #1283
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>