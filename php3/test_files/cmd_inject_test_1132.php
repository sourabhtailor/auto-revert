<?php
// Command Injection test variation #1132
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>