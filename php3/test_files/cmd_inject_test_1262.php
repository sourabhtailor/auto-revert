<?php
// Command Injection test variation #1262
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>