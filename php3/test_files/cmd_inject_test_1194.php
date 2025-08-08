<?php
// Command Injection test variation #1194
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>