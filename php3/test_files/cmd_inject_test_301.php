<?php
// Command Injection test variation #301
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>