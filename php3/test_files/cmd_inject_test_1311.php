<?php
// Command Injection test variation #1311
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>