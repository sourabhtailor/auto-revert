<?php
// Command Injection test variation #1301
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>