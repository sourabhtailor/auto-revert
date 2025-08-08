<?php
// Command Injection test variation #1256
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>