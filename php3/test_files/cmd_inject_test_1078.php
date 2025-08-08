<?php
// Command Injection test variation #1078
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>