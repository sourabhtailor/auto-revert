<?php
// Command Injection test variation #1100
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>