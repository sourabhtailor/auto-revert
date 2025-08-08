<?php
// Command Injection test variation #811
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>