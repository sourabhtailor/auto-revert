<?php
// Command Injection test variation #1401
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>