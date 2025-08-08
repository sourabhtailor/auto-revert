<?php
// Command Injection test variation #1026
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>