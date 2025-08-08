<?php
// Command Injection test variation #1448
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>