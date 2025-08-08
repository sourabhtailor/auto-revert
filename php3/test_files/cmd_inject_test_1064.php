<?php
// Command Injection test variation #1064
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>