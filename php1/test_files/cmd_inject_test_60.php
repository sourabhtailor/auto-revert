<?php
// Command Injection test variation #60
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>