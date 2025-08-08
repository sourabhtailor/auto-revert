<?php
// Command Injection test variation #52
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>