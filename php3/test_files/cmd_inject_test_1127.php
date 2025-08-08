<?php
// Command Injection test variation #1127
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>