<?php
// Command Injection test variation #1324
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>