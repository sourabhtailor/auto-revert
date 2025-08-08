<?php
// Command Injection test variation #1380
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>