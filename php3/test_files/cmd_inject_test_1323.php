<?php
// Command Injection test variation #1323
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>