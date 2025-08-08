<?php
// Command Injection test variation #1433
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>