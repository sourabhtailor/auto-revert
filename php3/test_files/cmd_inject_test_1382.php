<?php
// Command Injection test variation #1382
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>