<?php
// Command Injection test variation #1364
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>