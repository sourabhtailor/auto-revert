<?php
// Command Injection test variation #1473
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>