<?php
// Command Injection test variation #1261
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>