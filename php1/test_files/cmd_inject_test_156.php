<?php
// Command Injection test variation #156
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>