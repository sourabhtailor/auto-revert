<?php
// Command Injection test variation #1361
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>