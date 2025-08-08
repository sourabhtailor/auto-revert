<?php
// Command Injection test variation #1408
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>