<?php
// Command Injection test variation #1161
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>