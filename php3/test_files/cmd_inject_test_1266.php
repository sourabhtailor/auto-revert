<?php
// Command Injection test variation #1266
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>