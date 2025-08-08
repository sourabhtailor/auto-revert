<?php
// Command Injection test variation #238
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>