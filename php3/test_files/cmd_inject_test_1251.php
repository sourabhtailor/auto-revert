<?php
// Command Injection test variation #1251
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>