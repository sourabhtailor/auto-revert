<?php
// Command Injection test variation #1458
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>