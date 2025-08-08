<?php
// Command Injection test variation #38
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>