<?php
// Command Injection test variation #72
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>