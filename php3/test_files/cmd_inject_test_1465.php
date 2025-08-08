<?php
// Command Injection test variation #1465
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>