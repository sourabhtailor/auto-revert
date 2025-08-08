<?php
// Command Injection test variation #1149
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>