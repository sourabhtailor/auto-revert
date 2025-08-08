<?php
// Command Injection test variation #438
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>