<?php
// Command Injection test variation #1348
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>