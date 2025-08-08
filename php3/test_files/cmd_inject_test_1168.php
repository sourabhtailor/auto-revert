<?php
// Command Injection test variation #1168
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>