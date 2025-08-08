<?php
// Command Injection test variation #1384
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>