<?php
// Command Injection test variation #1475
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>