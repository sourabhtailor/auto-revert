<?php
// Command Injection test variation #1233
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>