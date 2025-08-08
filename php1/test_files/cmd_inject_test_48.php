<?php
// Command Injection test variation #48
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>