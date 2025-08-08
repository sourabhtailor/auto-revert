<?php
// Command Injection test variation #1271
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>