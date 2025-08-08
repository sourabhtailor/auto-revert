<?php
// Command Injection test variation #1442
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>