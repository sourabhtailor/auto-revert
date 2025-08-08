<?php
// Command Injection test variation #1002
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>