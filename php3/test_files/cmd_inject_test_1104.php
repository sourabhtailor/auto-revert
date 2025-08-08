<?php
// Command Injection test variation #1104
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>