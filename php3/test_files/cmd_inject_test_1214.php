<?php
// Command Injection test variation #1214
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>