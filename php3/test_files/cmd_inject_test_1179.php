<?php
// Command Injection test variation #1179
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>