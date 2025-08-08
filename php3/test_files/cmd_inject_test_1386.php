<?php
// Command Injection test variation #1386
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>