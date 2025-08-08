<?php
// Command Injection test variation #1381
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>