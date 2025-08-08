<?php
// Command Injection test variation #1204
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>