<?php
// Command Injection test variation #1498
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>