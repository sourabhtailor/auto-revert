<?php
// Command Injection test variation #98
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>