<?php
// Command Injection test variation #1330
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>