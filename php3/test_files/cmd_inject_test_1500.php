<?php
// Command Injection test variation #1500
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>