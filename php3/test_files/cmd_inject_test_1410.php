<?php
// Command Injection test variation #1410
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>