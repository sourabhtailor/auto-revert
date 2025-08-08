<?php
// Command Injection test variation #1462
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>