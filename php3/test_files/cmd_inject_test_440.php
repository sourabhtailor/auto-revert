<?php
// Command Injection test variation #440
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>