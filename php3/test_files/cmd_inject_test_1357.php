<?php
// Command Injection test variation #1357
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>