<?php
// Command Injection test variation #1482
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>