<?php
// Command Injection test variation #179
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>