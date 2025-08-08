<?php
// Command Injection test variation #338
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>