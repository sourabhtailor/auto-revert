<?php
// Command Injection test variation #1296
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>