<?php
// Command Injection test variation #1136
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>