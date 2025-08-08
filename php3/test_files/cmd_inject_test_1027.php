<?php
// Command Injection test variation #1027
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>