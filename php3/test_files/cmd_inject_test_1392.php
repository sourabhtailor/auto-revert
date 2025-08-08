<?php
// Command Injection test variation #1392
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>