<?php
// Command Injection test variation #1368
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>