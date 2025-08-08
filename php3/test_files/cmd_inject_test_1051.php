<?php
// Command Injection test variation #1051
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>