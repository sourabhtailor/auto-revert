<?php
// Command Injection test variation #1420
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>