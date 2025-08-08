<?php
// Command Injection test variation #1075
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>