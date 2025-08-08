<?php
// Command Injection test variation #70
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>