<?php
// Command Injection test variation #1122
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>