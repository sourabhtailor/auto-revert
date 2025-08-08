<?php
// Command Injection test variation #1338
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>