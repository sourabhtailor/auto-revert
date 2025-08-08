<?php
// Command Injection test variation #1066
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>