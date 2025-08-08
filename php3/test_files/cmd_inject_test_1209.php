<?php
// Command Injection test variation #1209
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>