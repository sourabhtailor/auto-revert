<?php
// Command Injection test variation #1004
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>