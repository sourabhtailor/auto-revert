<?php
// Command Injection test variation #61
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>