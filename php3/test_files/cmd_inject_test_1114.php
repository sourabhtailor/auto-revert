<?php
// Command Injection test variation #1114
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>