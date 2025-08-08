<?php
// Command Injection test variation #1085
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>