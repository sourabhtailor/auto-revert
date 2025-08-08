<?php
// Command Injection test variation #1049
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>