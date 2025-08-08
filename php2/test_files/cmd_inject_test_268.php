<?php
// Command Injection test variation #268
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>