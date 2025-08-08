<?php
// Command Injection test variation #1232
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>