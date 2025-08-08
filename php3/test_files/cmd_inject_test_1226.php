<?php
// Command Injection test variation #1226
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>