<?php
// Command Injection test variation #232
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>