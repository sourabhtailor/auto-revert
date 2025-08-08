<?php
// Command Injection test variation #1354
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>