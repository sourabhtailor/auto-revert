<?php
// Command Injection test variation #1479
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>