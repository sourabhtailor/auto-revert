<?php
// Command Injection test variation #1068
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>