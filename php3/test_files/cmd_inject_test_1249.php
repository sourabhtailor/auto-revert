<?php
// Command Injection test variation #1249
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>