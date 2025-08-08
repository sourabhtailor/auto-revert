<?php
// Command Injection test variation #1033
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>