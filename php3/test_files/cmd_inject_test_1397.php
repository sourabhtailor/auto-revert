<?php
// Command Injection test variation #1397
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>