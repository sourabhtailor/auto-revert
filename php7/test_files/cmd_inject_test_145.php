<?php
// Command Injection test variation #145
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>