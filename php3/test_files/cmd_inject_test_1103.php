<?php
// Command Injection test variation #1103
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>