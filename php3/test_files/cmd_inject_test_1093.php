<?php
// Command Injection test variation #1093
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>