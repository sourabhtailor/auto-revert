<?php
// Command Injection test variation #1449
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>