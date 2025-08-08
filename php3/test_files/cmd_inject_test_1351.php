<?php
// Command Injection test variation #1351
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>