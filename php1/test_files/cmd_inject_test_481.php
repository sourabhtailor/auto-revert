<?php
// Command Injection test variation #481
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>