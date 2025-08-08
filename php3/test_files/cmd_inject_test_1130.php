<?php
// Command Injection test variation #1130
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>