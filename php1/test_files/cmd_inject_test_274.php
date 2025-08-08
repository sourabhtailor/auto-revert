<?php
// Command Injection test variation #274
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>