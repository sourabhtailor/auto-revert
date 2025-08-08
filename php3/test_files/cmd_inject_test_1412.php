<?php
// Command Injection test variation #1412
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>