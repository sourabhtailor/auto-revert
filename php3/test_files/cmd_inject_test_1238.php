<?php
// Command Injection test variation #1238
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>