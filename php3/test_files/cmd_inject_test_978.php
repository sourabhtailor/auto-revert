<?php
// Command Injection test variation #978
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>