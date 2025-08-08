<?php
// Command Injection test variation #1200
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>