<?php
// Command Injection test variation #1468
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>