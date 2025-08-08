<?php
// Command Injection test variation #1236
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>