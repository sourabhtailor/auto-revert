<?php
// Command Injection test variation #1101
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>