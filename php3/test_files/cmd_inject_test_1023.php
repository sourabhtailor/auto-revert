<?php
// Command Injection test variation #1023
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>