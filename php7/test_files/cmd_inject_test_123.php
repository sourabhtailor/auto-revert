<?php
// Command Injection test variation #123
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>