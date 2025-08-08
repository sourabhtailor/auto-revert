<?php
// Command Injection test variation #1493
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>