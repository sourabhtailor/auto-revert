<?php
// Command Injection test variation #177
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>