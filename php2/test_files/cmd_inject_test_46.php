<?php
// Command Injection test variation #46
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>