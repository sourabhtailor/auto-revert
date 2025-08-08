<?php
// Command Injection test variation #88
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>