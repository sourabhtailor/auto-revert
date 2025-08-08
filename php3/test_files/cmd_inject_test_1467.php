<?php
// Command Injection test variation #1467
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>