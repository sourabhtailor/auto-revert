<?php
// Command Injection test variation #40
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>