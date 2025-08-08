<?php
// Command Injection test variation #261
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>