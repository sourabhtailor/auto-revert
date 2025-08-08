<?php
// Command Injection test variation #873
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>