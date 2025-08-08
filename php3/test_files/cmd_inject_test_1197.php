<?php
// Command Injection test variation #1197
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>