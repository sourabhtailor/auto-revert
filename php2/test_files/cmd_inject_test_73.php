<?php
// Command Injection test variation #73
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>