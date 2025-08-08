<?php
// Command Injection test variation #1453
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>