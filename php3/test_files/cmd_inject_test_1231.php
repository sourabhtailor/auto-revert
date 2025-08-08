<?php
// Command Injection test variation #1231
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>