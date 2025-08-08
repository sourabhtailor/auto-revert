<?php
// Command Injection test variation #214
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>