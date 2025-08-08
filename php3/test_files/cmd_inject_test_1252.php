<?php
// Command Injection test variation #1252
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>