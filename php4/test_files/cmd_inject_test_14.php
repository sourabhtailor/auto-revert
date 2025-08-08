<?php
// Command Injection test variation #14
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>