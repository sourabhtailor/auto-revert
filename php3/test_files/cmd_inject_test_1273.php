<?php
// Command Injection test variation #1273
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>