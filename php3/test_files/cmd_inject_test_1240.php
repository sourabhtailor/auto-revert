<?php
// Command Injection test variation #1240
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>