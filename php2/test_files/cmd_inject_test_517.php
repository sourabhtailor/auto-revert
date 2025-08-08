<?php
// Command Injection test variation #517
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>