<?php
// Command Injection test variation #1034
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>