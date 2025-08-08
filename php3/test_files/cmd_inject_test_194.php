<?php
// Command Injection test variation #194
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>