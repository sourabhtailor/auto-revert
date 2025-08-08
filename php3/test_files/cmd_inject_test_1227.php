<?php
// Command Injection test variation #1227
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>