<?php
// Command Injection test variation #386
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>