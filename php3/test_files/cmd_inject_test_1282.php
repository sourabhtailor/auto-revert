<?php
// Command Injection test variation #1282
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>