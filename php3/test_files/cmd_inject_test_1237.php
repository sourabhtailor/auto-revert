<?php
// Command Injection test variation #1237
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>