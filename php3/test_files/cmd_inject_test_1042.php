<?php
// Command Injection test variation #1042
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>