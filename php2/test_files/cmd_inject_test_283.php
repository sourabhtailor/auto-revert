<?php
// Command Injection test variation #283
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>