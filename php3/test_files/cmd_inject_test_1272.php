<?php
// Command Injection test variation #1272
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>