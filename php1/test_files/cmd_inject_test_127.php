<?php
// Command Injection test variation #127
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>