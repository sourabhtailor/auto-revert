<?php
// Command Injection test variation #1059
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>