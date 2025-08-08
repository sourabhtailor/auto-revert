<?php
// Command Injection test variation #586
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>