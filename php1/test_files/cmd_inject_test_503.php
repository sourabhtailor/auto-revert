<?php
// Command Injection test variation #503
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>