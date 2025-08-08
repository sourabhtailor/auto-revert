<?php
// Command Injection test variation #1440
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>