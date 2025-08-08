<?php
// Command Injection test variation #1259
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>