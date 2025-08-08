<?php
// Command Injection test variation #1035
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>