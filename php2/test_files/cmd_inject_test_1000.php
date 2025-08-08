<?php
// Command Injection test variation #1000
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>