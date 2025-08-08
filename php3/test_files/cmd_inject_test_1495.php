<?php
// Command Injection test variation #1495
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>