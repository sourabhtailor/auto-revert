<?php
// Command Injection test variation #1395
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>