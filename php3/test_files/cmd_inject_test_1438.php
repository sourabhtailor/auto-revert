<?php
// Command Injection test variation #1438
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>