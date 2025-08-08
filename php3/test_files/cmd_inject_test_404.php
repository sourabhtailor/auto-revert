<?php
// Command Injection test variation #404
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>