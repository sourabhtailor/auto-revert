<?php
// Command Injection test variation #1144
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>