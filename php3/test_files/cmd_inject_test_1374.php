<?php
// Command Injection test variation #1374
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>