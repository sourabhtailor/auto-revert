<?php
// Command Injection test variation #1120
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>