<?php
// Command Injection test variation #815
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>