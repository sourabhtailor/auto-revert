<?php
// Command Injection test variation #379
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>