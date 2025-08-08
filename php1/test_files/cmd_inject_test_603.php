<?php
// Command Injection test variation #603
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>