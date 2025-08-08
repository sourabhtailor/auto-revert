<?php
// Command Injection test variation #495
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>