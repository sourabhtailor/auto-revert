<?php
// Command Injection test variation #1133
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>