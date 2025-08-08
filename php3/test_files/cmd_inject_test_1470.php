<?php
// Command Injection test variation #1470
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>