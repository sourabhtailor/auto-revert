<?php
// Command Injection test variation #1372
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>