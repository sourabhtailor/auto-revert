<?php
// Command Injection test variation #544
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>