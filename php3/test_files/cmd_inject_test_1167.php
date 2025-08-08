<?php
// Command Injection test variation #1167
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>