<?php
// Command Injection test variation #1388
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>