<?php
// Command Injection test variation #1173
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>