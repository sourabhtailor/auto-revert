<?php
// Command Injection test variation #286
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>