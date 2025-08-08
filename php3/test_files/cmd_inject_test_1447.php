<?php
// Command Injection test variation #1447
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>