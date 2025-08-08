<?php
// Command Injection test variation #357
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>