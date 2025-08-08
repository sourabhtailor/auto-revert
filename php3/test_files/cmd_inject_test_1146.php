<?php
// Command Injection test variation #1146
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>