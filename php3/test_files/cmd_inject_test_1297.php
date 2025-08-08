<?php
// Command Injection test variation #1297
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>