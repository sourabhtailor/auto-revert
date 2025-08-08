<?php
// Command Injection test variation #1396
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>