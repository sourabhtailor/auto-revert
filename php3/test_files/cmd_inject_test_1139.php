<?php
// Command Injection test variation #1139
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>