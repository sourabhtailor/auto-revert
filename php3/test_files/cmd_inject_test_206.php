<?php
// Command Injection test variation #206
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>