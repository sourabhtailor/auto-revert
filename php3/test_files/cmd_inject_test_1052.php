<?php
// Command Injection test variation #1052
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>