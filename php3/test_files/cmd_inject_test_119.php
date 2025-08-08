<?php
// Command Injection test variation #119
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>