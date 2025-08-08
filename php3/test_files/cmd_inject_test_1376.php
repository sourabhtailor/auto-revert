<?php
// Command Injection test variation #1376
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>