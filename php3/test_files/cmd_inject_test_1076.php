<?php
// Command Injection test variation #1076
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>