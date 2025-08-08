<?php
// Command Injection test variation #64
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>