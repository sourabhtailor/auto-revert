<?php
// Command Injection test variation #1221
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>