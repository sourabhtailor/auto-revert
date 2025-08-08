<?php
// Command Injection test variation #411
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>