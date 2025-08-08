<?php
// Command Injection test variation #1180
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>