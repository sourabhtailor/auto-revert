<?php
// Command Injection test variation #1069
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>