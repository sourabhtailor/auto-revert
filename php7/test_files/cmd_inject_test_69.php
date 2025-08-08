<?php
// Command Injection test variation #69
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>