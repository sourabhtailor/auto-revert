<?php
// Command Injection test variation #1291
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>