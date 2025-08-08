<?php
// Command Injection test variation #1302
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>