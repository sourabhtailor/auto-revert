<?php
// Command Injection test variation #1308
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>