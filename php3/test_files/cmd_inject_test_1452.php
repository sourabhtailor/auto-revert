<?php
// Command Injection test variation #1452
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>