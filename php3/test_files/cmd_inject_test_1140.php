<?php
// Command Injection test variation #1140
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>