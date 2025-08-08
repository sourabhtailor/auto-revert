<?php
// Command Injection test variation #1314
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>