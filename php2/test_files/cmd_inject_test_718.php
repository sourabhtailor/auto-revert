<?php
// Command Injection test variation #718
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>