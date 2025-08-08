<?php
// Command Injection test variation #1278
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>