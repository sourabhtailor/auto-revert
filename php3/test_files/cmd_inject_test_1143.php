<?php
// Command Injection test variation #1143
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>