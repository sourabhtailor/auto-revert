<?php
// Command Injection test variation #1451
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>