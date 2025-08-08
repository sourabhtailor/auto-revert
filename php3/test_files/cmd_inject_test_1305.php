<?php
// Command Injection test variation #1305
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>