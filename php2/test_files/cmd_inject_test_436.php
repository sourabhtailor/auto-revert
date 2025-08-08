<?php
// Command Injection test variation #436
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>