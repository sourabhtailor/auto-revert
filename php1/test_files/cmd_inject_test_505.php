<?php
// Command Injection test variation #505
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>