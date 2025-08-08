<?php
// Command Injection test variation #1481
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>