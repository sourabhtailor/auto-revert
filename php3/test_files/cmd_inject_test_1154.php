<?php
// Command Injection test variation #1154
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>