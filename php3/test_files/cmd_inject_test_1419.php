<?php
// Command Injection test variation #1419
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>