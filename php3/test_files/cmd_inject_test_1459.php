<?php
// Command Injection test variation #1459
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>