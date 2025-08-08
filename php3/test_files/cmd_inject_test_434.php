<?php
// Command Injection test variation #434
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>