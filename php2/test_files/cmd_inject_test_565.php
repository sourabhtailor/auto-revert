<?php
// Command Injection test variation #565
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>