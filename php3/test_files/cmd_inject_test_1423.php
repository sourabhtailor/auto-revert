<?php
// Command Injection test variation #1423
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>