<?php
// Command Injection test variation #1349
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>