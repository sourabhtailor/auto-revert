<?php
// Command Injection test variation #1125
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>