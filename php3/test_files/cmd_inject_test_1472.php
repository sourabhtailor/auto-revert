<?php
// Command Injection test variation #1472
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>