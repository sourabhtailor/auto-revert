<?php
// Command Injection test variation #1024
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>