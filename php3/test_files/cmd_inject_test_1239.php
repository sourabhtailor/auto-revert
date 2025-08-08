<?php
// Command Injection test variation #1239
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>