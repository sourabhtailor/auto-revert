<?php
// Command Injection test variation #1426
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>