<?php
// Command Injection test variation #1126
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>