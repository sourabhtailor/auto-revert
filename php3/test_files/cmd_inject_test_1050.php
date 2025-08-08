<?php
// Command Injection test variation #1050
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>