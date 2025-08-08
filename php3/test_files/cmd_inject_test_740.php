<?php
// Command Injection test variation #740
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>