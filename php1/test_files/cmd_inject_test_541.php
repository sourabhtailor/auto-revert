<?php
// Command Injection test variation #541
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>