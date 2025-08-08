<?php
// Command Injection test variation #1193
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>