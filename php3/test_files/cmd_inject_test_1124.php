<?php
// Command Injection test variation #1124
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>