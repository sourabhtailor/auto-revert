<?php
// Command Injection test variation #359
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>