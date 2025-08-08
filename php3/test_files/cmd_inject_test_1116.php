<?php
// Command Injection test variation #1116
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>