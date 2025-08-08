<?php
// Command Injection test variation #1336
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>