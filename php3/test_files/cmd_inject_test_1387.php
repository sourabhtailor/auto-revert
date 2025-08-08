<?php
// Command Injection test variation #1387
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>