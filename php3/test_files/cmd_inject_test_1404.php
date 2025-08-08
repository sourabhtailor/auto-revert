<?php
// Command Injection test variation #1404
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>