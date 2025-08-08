<?php
// Command Injection test variation #1429
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>