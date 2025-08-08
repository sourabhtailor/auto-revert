<?php
// Command Injection test variation #1464
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>