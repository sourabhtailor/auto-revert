<?php
// Command Injection test variation #1119
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>