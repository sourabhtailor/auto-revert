<?php
// Command Injection test variation #1086
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>