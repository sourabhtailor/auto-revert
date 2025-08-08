<?php
// Command Injection test variation #317
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>