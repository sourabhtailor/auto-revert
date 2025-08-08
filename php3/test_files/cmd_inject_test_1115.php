<?php
// Command Injection test variation #1115
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>