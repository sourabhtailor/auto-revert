<?php
// Command Injection test variation #1454
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>