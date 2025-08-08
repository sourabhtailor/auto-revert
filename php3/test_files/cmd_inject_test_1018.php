<?php
// Command Injection test variation #1018
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>