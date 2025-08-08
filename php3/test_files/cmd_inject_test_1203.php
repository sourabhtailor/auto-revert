<?php
// Command Injection test variation #1203
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>