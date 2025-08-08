<?php
// Command Injection test variation #1003
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>