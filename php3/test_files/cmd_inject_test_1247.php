<?php
// Command Injection test variation #1247
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>