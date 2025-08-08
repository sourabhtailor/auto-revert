<?php
// Command Injection test variation #292
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>