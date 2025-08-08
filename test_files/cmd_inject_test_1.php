<?php
// Command Injection test variation #1
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>