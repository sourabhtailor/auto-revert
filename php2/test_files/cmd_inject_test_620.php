<?php
// Command Injection test variation #620
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>