<?php
// Command Injection test variation #1477
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>