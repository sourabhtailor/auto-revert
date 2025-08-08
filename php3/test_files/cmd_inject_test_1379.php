<?php
// Command Injection test variation #1379
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>