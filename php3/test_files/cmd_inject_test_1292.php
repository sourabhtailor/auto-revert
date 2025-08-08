<?php
// Command Injection test variation #1292
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>