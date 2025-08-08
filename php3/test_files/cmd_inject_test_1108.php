<?php
// Command Injection test variation #1108
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>