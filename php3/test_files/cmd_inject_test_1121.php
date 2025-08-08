<?php
// Command Injection test variation #1121
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>