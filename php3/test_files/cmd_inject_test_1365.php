<?php
// Command Injection test variation #1365
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>