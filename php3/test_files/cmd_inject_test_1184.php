<?php
// Command Injection test variation #1184
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>