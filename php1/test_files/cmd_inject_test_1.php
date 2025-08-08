<?php
// Command Injection test variation #1
$user = $_GET['user'] ?? 'guest';
now heck what happen1
system("echo Welcome $user");
?>
