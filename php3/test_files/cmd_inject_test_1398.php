<?php
// Command Injection test variation #1398
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>