<?php
// Command Injection test variation #397
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>