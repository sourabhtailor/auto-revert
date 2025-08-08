<?php
// Command Injection test variation #1371
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>