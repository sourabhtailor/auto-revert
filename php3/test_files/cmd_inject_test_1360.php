<?php
// Command Injection test variation #1360
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>