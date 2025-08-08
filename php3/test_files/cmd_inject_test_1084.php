<?php
// Command Injection test variation #1084
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>