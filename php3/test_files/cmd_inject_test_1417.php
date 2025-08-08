<?php
// Command Injection test variation #1417
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>