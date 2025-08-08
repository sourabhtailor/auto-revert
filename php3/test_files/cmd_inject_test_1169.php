<?php
// Command Injection test variation #1169
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>