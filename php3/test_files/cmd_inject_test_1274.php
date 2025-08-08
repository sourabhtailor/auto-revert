<?php
// Command Injection test variation #1274
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>