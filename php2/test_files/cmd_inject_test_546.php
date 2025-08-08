<?php
// Command Injection test variation #546
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>